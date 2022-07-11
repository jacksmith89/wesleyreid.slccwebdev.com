const prime = []
const primeDivisors = [2, 3, 5, 7]
const num = 1000
let primeDivIterator = 0

for (i = 2; prime.length < num; i++) {
    for (j = 0; j <= primeDivisors.length; j++) {
        if (i === primeDivisors[j]) {
            prime.push(i);
            console.log(i);
            break;
        } else if (j >= 0) {
            if (i % primeDivisors[j] === 0) {
                break;
            } else if (j === primeDivisors.length) {
                prime.push(i);
                console.log(i);
            }
        }
    } if (prime.length > 4) {
        primeDivIterator = (prime.length - 1);
        primeDivisors.push(prime[primeDivIterator]);
    }
    if (primeDivisors[primeDivisors.length - 1] === primeDivisors[primeDivisors.length - 2]) {
        primeDivisors.pop()
    }
}

const primeSum = () => {
    let sum = 0
    for (i = 0; i < prime.length; i++) {
        sum += prime[i];
    }
    return sum;
}
console.log(prime);
console.log(`Sum of the first ${num} primes: ${primeSum()}`);