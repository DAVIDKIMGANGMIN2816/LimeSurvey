#!/usr/bin/env python3
"""
C++ Race Condition Analyzer using Google GenAI

This script uses Google's Gemini AI to analyze C++ code for potential race conditions.
"""

import sys
import argparse
from google import genai


def analyze_race_condition(code_snippet, model="gemini-2.0-flash-exp"):
    """
    Analyze C++ code for race conditions using Google GenAI.
    
    Args:
        code_snippet (str): The C++ code to analyze
        model (str): The Gemini model to use (default: gemini-2.0-flash-exp)
    
    Returns:
        str: Analysis results from the AI model
    """
    try:
        client = genai.Client()
        
        prompt = f"Find the race condition in this multi-threaded C++ snippet: {code_snippet}"
        
        response = client.models.generate_content(
            model=model,
            contents=prompt
        )
        
        return response.text
    except Exception as e:
        return f"Error during analysis: {str(e)}"


def main():
    """Main entry point for the script."""
    parser = argparse.ArgumentParser(
        description='Analyze C++ code for race conditions using Google GenAI'
    )
    parser.add_argument(
        'code',
        nargs='?',
        help='C++ code snippet to analyze (if not provided, reads from stdin)'
    )
    parser.add_argument(
        '-f', '--file',
        help='Read C++ code from a file'
    )
    parser.add_argument(
        '-m', '--model',
        default='gemini-2.0-flash-exp',
        help='Gemini model to use (default: gemini-2.0-flash-exp)'
    )
    
    args = parser.parse_args()
    
    # Get code from various sources
    if args.file:
        try:
            with open(args.file, 'r') as f:
                code_snippet = f.read()
        except FileNotFoundError:
            print(f"Error: File '{args.file}' not found.", file=sys.stderr)
            sys.exit(1)
        except Exception as e:
            print(f"Error reading file: {str(e)}", file=sys.stderr)
            sys.exit(1)
    elif args.code:
        code_snippet = args.code
    else:
        # Read from stdin
        print("Enter C++ code (press Ctrl+D when done):")
        code_snippet = sys.stdin.read()
    
    if not code_snippet.strip():
        print("Error: No code provided to analyze.", file=sys.stderr)
        sys.exit(1)
    
    print("Analyzing code for race conditions...\n")
    result = analyze_race_condition(code_snippet, args.model)
    print(result)


if __name__ == "__main__":
    main()
