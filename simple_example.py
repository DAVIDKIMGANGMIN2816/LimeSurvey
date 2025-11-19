#!/usr/bin/env python3
"""
Simple example matching the problem statement format.

This demonstrates the basic usage of Google GenAI API to find race conditions.
"""

from google import genai


client = genai.Client()


prompt = "Find the race condition in this multi-threaded C++ snippet: [code here]"


response = client.models.generate_content(
    model="gemini-2.0-flash-exp",
    contents=prompt
)


print(response.text)
