const fruits = ['nanasi','chungwa','nanasi','embe','chungwa'];
const FrequencyCounter = (arrayOfItems) => {
    const counter = {}
    for(const item of arrayOfItems){
        counter[item] = (counter[item] || 0) + 1
    }
    console.log(counter)
}

FrequencyCounter(fruits);