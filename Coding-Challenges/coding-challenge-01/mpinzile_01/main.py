# Function that takes in a string and returns a number of vowels in it.
def count_vowels(str):
  count = 0
  vowels = ['a','e','i','o','u']
  for char in str.lower():
    if char in vowels:
      count += 1
  return count


print(count_vowels("The quick brown fox jumps over the lazy dog."))