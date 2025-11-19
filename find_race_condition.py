#!/usr/bin/env python3
"""
Script to find race conditions in C++ code using Google GenAI API.

This script uses the Google GenAI API (Gemini) to analyze C++ code
and identify potential race conditions in multi-threaded programs.
"""

from google import genai


def main():
    """Main function to demonstrate race condition detection using GenAI."""
    # Initialize the GenAI client
    client = genai.Client()

    # Example C++ code with a race condition
    cpp_code = """
    #include <thread>
    #include <iostream>
    
    int counter = 0;
    
    void increment() {
        for (int i = 0; i < 1000; ++i) {
            counter++;  // Race condition: no synchronization
        }
    }
    
    int main() {
        std::thread t1(increment);
        std::thread t2(increment);
        t1.join();
        t2.join();
        std::cout << "Counter: " << counter << std::endl;
        return 0;
    }
    """

    # Create the prompt for finding race conditions
    prompt = f"Find the race condition in this multi-threaded C++ snippet: {cpp_code}"

    # Generate content using Gemini model
    response = client.models.generate_content(
        model="gemini-2.0-flash-exp",
        contents=prompt
    )

    # Print the response
    print(response.text)


if __name__ == "__main__":
    main()
