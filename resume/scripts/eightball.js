function askQuestion() {
  document.getElementById("greeting").innerHTML = '';
  document.getElementById("questionFull").innerHTML = '';
  document.getElementById("final").innerHTML = '';
let userName = document.getElementById("name").value
        userName ? document.getElementById("greeting").innerHTML += (`Hello, ${userName}! `) : document.getElementById("greeting").innerHTML += ('Hello! ');
        let userQuestion = document.getElementById("question").value
if (userName) {
  userQuestion ? document.getElementById("questionFull").innerHTML += (`So, ${userName}, you want to know '${userQuestion}', is that right? `) : document.getElementById("questionFull").innerHTML += (`Go ahead, ${userName}, ask me a question! `);
} else {
  userQuestion ? document.getElementById("questionFull").innerHTML += (`So, you want to know '${userQuestion}', is that right? `) : document.getElementById("questionFull").innerHTML += (`Go ahead, ask me a question! `)
}
let randomNumber = Math.floor(Math.random() * 8);
let eightBall = ''
switch (randomNumber) {
  case 0:
  eightBall = 'It is certain!'
  break;
  case 1:
  eightBall = 'It is decidedly so.'
  break;
  case 2:
  eightBall = 'Clouded, the future is. Try again later.'
  break;
  case 3:
  eightBall = 'You know what? I don\'t like your tone. Maybe try again and ask more nicely.'
  break;
  case 4:
  eightBall = 'Don\'t count on it, bud.'
  break;
  case 5:
  eightBall = 'We had to check with someone else, but . . . No. Not happening.'
  break;
  case 6:
  eightBall = 'Outlook: Not so good!'
  break;
  case 7:
  eightBall = 'Signs point to yes. But what the do I know, I\'m nothing but code written as a homework assignement. Maybe you should do some real research. Go use the Google or something.'
  break;
  default:
  eightBall = 'So are you gonna ask something or not?'
  break;
}
userQuestion ? document.getElementById("final").innerHTML += (`The machine spirits say, \'${eightBall}\'`) : document.getElementById("final").innerHTML += ('So, are you gonna ask something, or what?');
}
