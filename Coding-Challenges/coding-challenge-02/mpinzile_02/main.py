def get_sum(number): # Function to take in a positive integer
    sum = 0
    if isinstance(number, (int, float)): # Checking to ensure the provided input is either a int or float
      digits = str(abs(int(number))) # Convert it to integer since only integers are added
      for digit in digits:
          sum += int(digit)
    return sum


number = 12345
print(get_sum(number))