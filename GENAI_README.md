# Race Condition Finder using Google GenAI

This Python script uses Google's GenAI (Gemini) API to find race conditions in multi-threaded C++ code.

## Prerequisites

- Python 3.7 or higher
- Google GenAI API access
- API key configured

## Installation

1. Install the required dependencies:
```bash
pip install -r requirements.txt
```

2. Set up your Google GenAI API key:
```bash
export GOOGLE_API_KEY="your-api-key-here"
```

Or configure it according to the [Google GenAI documentation](https://ai.google.dev/gemini-api/docs/api-key).

## Usage

Run the script to analyze C++ code for race conditions:

```bash
python find_race_condition.py
```

The script includes an example C++ code snippet with a race condition. The GenAI model will analyze the code and provide insights about potential race conditions.

## How it works

1. The script initializes a Google GenAI client
2. It provides a C++ code snippet with a potential race condition
3. The script sends a prompt to the Gemini model asking it to find race conditions
4. The model analyzes the code and returns its findings

## Example Output

The script will analyze the provided C++ code and identify issues such as:
- Unsynchronized access to shared variables
- Missing mutex locks
- Thread safety issues
- Suggestions for fixing the race conditions

## Customization

You can modify the `cpp_code` variable in the script to analyze your own C++ code snippets.

## Model Information

The script uses the `gemini-2.0-flash-exp` model for code analysis. You can change this to other available models based on your requirements.

## License

This script is part of the LimeSurvey project and follows the same license terms.
