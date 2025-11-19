# C++ Race Condition Analyzer

This tool uses Google's Gemini AI to analyze C++ code snippets for potential race conditions in multi-threaded applications.

## Prerequisites

- Python 3.7 or higher
- Google GenAI Python SDK
- Valid Google API credentials (API key or OAuth)

## Installation

Install the required dependencies:

```bash
pip install -r requirements.txt
```

## Authentication

Before using this tool, you need to set up authentication with Google's GenAI API. You can use one of the following methods:

1. **API Key** (Recommended for testing):
   ```bash
   export GOOGLE_API_KEY="your-api-key-here"
   ```

2. **OAuth**: Follow Google's authentication documentation for more advanced setups.

## Usage

### Analyze code from command line:

```bash
python analyze_race_condition.py "your C++ code here"
```

### Analyze code from a file:

```bash
python analyze_race_condition.py -f /path/to/your/code.cpp
```

### Analyze code from stdin:

```bash
python analyze_race_condition.py
# Then paste your code and press Ctrl+D when done
```

### Specify a different model:

```bash
python analyze_race_condition.py -m gemini-2.0-flash-exp -f code.cpp
```

## Options

- `-f, --file FILE`: Read C++ code from a file
- `-m, --model MODEL`: Specify the Gemini model to use (default: gemini-2.0-flash-exp)
- `-h, --help`: Show help message

## Example

```bash
python analyze_race_condition.py -f example.cpp
```

## Notes

- The tool requires an active internet connection to communicate with Google's GenAI API
- API usage may be subject to rate limits and quotas
- For best results, provide complete code snippets with sufficient context
