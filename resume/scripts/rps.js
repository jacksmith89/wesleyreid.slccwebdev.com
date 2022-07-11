//The constant variable 'getUserChoice' contains an anonymous function with the single parameter userInput, shown by parameter (no parantheses) fatty arrow code
const getUserChoice = userInput => {
  userInput = userInput.toLowerCase();
  if(userInput === 'rock') {
    return userInput;
  } else if(userInput === 'paper') {
    return userInput;
  } else if(userInput === 'scissors') {
    return userInput;
  } else if(userInput === 'bomb?') {
  	return userInput;
  } else  {
    console.log(`Wait, \'${userInput}\'? What is \'${userInput}\'?? That\'s an ERROR, my dude!`);
    //document.getElementById("userError").innerHTML += (`Wait, \'${userInput}\'? What the fuck is \'${userInput}\'?? That\'s a motherfucking ERROR, my dude!`);
  }
}

function getComputerChoice() {
  let randomNumber = Math.floor(Math.random() * 3);
  if(randomNumber === 0) {
    return 'rock';
  } else if(randomNumber === 1) {
    return 'paper';
  } else {
    return 'scissors';
  }
}

function determineWinner(userChoice, computerChoice) {
  console.log(userChoice, computerChoice);
  if(!userChoice) {
  return 'Wait, you\'re not even going to pick something? What the heck, man?! That\'s an ERROR, my dude! <br><br>'
  } else if(userChoice === computerChoice) {
    return `Hey, we both picked ${userChoice}! It's a tie! <br><br>`;
  } else if(userChoice === 'paper') {
    if(computerChoice === 'rock') {
      return `You picked ${userChoice}, I picked ${computerChoice}! You win! Which is a load of crap, how the heck does paper beat a rock? Whatever. You win, I guess. <br><br>`;
    } else {
      return `You picked ${userChoice}, I picked ${computerChoice}! You lose! What kind of LOSER picks paper, anyway? <br><br>`;
    }
  } else if(userChoice === 'rock') {
    if(computerChoice === 'scissors') {
      return `You picked ${userChoice}, I picked ${computerChoice}! You win! Now I can't do my arts and crafts anymore, because you smashed my scissors with a rock! Was it worth it, jerk? <br><br>`;
    } else {
      return `You picked ${userChoice}, I picked ${computerChoice}! You lose! I don\'t really know how, though, I mean it doesn\'t really make a lot of sense. Paper beats rock? Whatever, I win! <br><br>`;
    }
  } else if(userChoice === 'scissors') {
    if(computerChoice === 'paper') {
      return `You picked ${userChoice}, I picked ${computerChoice}! You win! My paper, though? That was a letter to my grandma. She\'s in the hospital. Now she\'ll never see this beautiful, heartfelt letter. You monster. <br><br>`;
    } else {
      return `You picked ${userChoice}, I picked ${computerChoice}! You lose! Look at you, with your dumb smashed up scissors. Not so *SHARP* now, are you? Ha ha! <br><br>`;
    }
  } else if(userChoice === 'bomb?') {
  	return 'Wait, a BOMB?! You can\'t pick a bomb, what is wrong with you?! That thing could go off any ti&#8212; <br><br>';
  } else {
  return `Wait, \'${userInput}\'? What is \'${userInput}\'?? That\'s an ERROR, my dude! <br><br>`
  }
}

/*const determineWinner = (userChoice, computerChoice) => {
  console.log(userChoice, computerChoice);
  if(userChoice === computerChoice) {
    return 'Tie';
  } else if(userChoice === 'paper') {
    if(computerChoice === 'rock') {
      return 'You win!';
    } else {
      return 'You lose!';
    }
  } else if(userChoice === 'rock') {
    if(computerChoice === 'scissors') {
      return 'You win!';
    } else {
      return 'You lose!';
    }
  } else {
    if(computerChoice === 'paper') {
      return 'You win!';
    } else {
      return 'You lose!';
    }
  }
}*/

function playGame() {
  userChoice = getUserChoice(document.getElementById("choice").value);
  computerChoice = getComputerChoice();
  console.log(determineWinner(userChoice, computerChoice));
  document.getElementById("gameFinal").innerHTML += (determineWinner(userChoice, computerChoice));
}

function reset() {
	document.getElementById("gameFinal").innerHTML = '';
}
