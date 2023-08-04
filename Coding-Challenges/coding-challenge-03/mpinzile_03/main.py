import re

def is_palindrome(input_string):
    # A regular expression pattern to match non-alphanumeric characters
    alphanumeric_regex = r'[^a-zA-Z0-9]'
    
    # Removing non-alphanumeric characters and convert the string to lowercase
    cleaned_string = re.sub(alphanumeric_regex, '', input_string).lower()
    
    # Reversing the cleaned string and convert it to lowercase
    reversed_string = ''.join(reversed(cleaned_string)).lower()
    
    # Comparing the cleaned string and its reverse to check if it's a palindrome
    return cleaned_string == reversed_string

string = "racecar"
print(is_palindrome(string))
