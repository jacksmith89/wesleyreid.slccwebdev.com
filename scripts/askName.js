function askName() {
    let greeting;
    let date = new Date();
    let hour = date.getHours();
    if (hour >= 5 && hour <= 12) {
        greeting = "good morning, ";
    } else if (hour >= 12 && hour <= 18) {
        greeting = "good afternoon, ";
    } else if (hour >= 18) {
        greeting = "good evening, ";
    } else {
        greeting = "why are you awake? Go back to sleep, ";
    }

    let userName = prompt("Hi! What's your name?");
    if (userName != "" && userName != null) {
        alert("Thanks a lot, and " + greeting + userName + "! You're a good person! Boy, it's sure a good thing that you didn't try to get through without giving a name.")
    } else {
        userName = prompt("No, really, I need you to put in a name. Even a fake name. Please, it's for my homework.")
        if (userName != "" && userName != null) {
            alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
        } else {
            userName = prompt("Come on, really?? It's just a name. Pleeeease.")
            if (userName != "" && userName != null) {
                alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
            } else {
                userName = prompt("It's really not that big of a deal. I don't even care. I guess I'll just let you go through without a name . . .")
                if (userName != "" && userName != null) {
                    alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                } else {
                    userName = prompt("PSYCH! No name, no website. That's the rules that I've just made up.")
                    if (userName != "" && userName != null) {
                        alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                    } else {
                        userName = prompt("Alright, I'm tired of coming up with these. You didn't really think it would go on forever, did you?")
                        if (userName != "" && userName != null) {
                            alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                        } else {
                            userName = prompt("Just kidding, I'm not bored yet!")
                            if (userName != "" && userName != null) {
                                alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                            } else {
                                userName = prompt("Ooor I could go on forever. I mean, probably, I think I could just program a loop so you're stuck if you don't enter something.")
                                if (userName != "" && userName != null) {
                                    alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                } else {
                                    userName = prompt("Please")
                                    if (userName != "" && userName != null) {
                                        alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                    } else {
                                        userName = prompt("Just")
                                        if (userName != "" && userName != null) {
                                            alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                        } else {
                                            userName = prompt("Put")
                                            if (userName != "" && userName != null) {
                                                alert("TThanks a lot, and " + greeting + userName + "! Was that so hard?")
                                            } else {
                                                userName = prompt("In")
                                                if (userName != "" && userName != null) {
                                                    alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                                } else {
                                                    userName = prompt("A")
                                                    if (userName != "" && userName != null) {
                                                        alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                                    } else {
                                                        userName = prompt("Name!")
                                                        if (userName != "" && userName != null) {
                                                            alert("Thanks a lot, and " + greeting + userName + "! Was that so hard?")
                                                        } else {
                                                            alert("Alright, I'm done for real this time. This is the end. Enjoy the website, No-Name.")
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}