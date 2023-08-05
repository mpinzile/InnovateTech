const sumOfNumbers = (numbers) => {
    const arrayOfStringNumbers = numbers.toString().split('');
    const arrayOfNumbers = arrayOfStringNumbers.map(number => parseInt(number));
    let sum = 0;
    let i = 0
    for(i;i<arrayOfNumbers.length;i++){
        sum += arrayOfNumbers[i]
    }

    console.log(sum)
}

sumOfNumbers(12345)