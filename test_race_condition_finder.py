#!/usr/bin/env python3
"""
Tests for the race condition finder scripts.

These tests verify the structure and imports of the scripts without
requiring an actual API key.
"""

import unittest
import sys
import ast
import os


class TestScriptStructure(unittest.TestCase):
    """Test the structure of the Python scripts."""

    def test_find_race_condition_imports(self):
        """Test that find_race_condition.py has correct imports."""
        with open('find_race_condition.py', 'r') as f:
            content = f.read()
        
        # Parse the AST
        tree = ast.parse(content)
        
        # Check for the genai import
        imports = [node for node in ast.walk(tree) if isinstance(node, ast.ImportFrom)]
        genai_imported = any(
            node.module == 'google' and any(alias.name == 'genai' for alias in node.names)
            for node in imports
        )
        self.assertTrue(genai_imported, "google.genai should be imported")

    def test_find_race_condition_has_main(self):
        """Test that find_race_condition.py has a main function."""
        with open('find_race_condition.py', 'r') as f:
            content = f.read()
        
        tree = ast.parse(content)
        
        # Check for main function
        functions = [node.name for node in ast.walk(tree) if isinstance(node, ast.FunctionDef)]
        self.assertIn('main', functions, "Should have a main() function")

    def test_simple_example_imports(self):
        """Test that simple_example.py has correct imports."""
        with open('simple_example.py', 'r') as f:
            content = f.read()
        
        tree = ast.parse(content)
        
        # Check for the genai import
        imports = [node for node in ast.walk(tree) if isinstance(node, ast.ImportFrom)]
        genai_imported = any(
            node.module == 'google' and any(alias.name == 'genai' for alias in node.names)
            for node in imports
        )
        self.assertTrue(genai_imported, "google.genai should be imported")

    def test_simple_example_has_client(self):
        """Test that simple_example.py creates a client."""
        with open('simple_example.py', 'r') as f:
            content = f.read()
        
        self.assertIn('client = genai.Client()', content, "Should create a genai.Client()")

    def test_simple_example_has_prompt(self):
        """Test that simple_example.py has a prompt."""
        with open('simple_example.py', 'r') as f:
            content = f.read()
        
        self.assertIn('prompt =', content, "Should have a prompt variable")
        self.assertIn('race condition', content.lower(), "Prompt should mention race condition")

    def test_simple_example_generates_content(self):
        """Test that simple_example.py calls generate_content."""
        with open('simple_example.py', 'r') as f:
            content = f.read()
        
        self.assertIn('generate_content', content, "Should call generate_content")
        self.assertIn('model=', content, "Should specify a model")

    def test_simple_example_prints_response(self):
        """Test that simple_example.py prints the response."""
        with open('simple_example.py', 'r') as f:
            content = f.read()
        
        self.assertIn('print(response.text)', content, "Should print response.text")

    def test_cpp_code_present(self):
        """Test that find_race_condition.py contains C++ code example."""
        with open('find_race_condition.py', 'r') as f:
            content = f.read()
        
        self.assertIn('#include', content, "Should contain C++ code with #include")
        self.assertIn('std::thread', content, "Should contain threading code")
        self.assertIn('counter++', content, "Should have counter increment (race condition)")

    def test_requirements_file_exists(self):
        """Test that requirements.txt exists and contains google-genai."""
        self.assertTrue(os.path.exists('requirements.txt'), "requirements.txt should exist")
        
        with open('requirements.txt', 'r') as f:
            content = f.read()
        
        self.assertIn('google-genai', content, "requirements.txt should contain google-genai")

    def test_readme_exists(self):
        """Test that GENAI_README.md exists."""
        self.assertTrue(os.path.exists('GENAI_README.md'), "GENAI_README.md should exist")
        
        with open('GENAI_README.md', 'r') as f:
            content = f.read()
        
        self.assertIn('Race Condition', content, "README should mention Race Condition")
        self.assertIn('GenAI', content, "README should mention GenAI")
        self.assertIn('Installation', content, "README should have Installation section")

    def test_scripts_are_executable(self):
        """Test that Python scripts have shebang."""
        for script in ['find_race_condition.py', 'simple_example.py']:
            with open(script, 'r') as f:
                first_line = f.readline()
            
            self.assertTrue(
                first_line.startswith('#!'),
                f"{script} should have shebang line"
            )
            self.assertIn('python', first_line.lower(), f"{script} shebang should reference python")


if __name__ == '__main__':
    # Run tests
    unittest.main()
