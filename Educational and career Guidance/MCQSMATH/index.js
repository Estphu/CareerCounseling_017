const questions = [
    {
        question: " Which number should come next in the pattern? 37, 34, 31, 28?",
        optionA: "33",
        optionB: "25",
        optionC: "21",
        optionD: "19",
        correctOption: "optionA"
    },

    {
        question: " The average of first 50 natural numbers is ………….?",
        optionA: "25.5",
        optionB: "25.30",
        optionC: "25.00",
        optionD: "12.25",
        correctOption: "optionC"
    },

    {
        question: " A fraction which bears the same ratio to 1/27 as 3/11 bear to 5/9 is equal to ……….",
        optionA: "55,",
        optionB: "3/11",
        optionC: "1/11",
        optionD: "1/55",
        correctOption: "optionC"
    },

    {
        question: "30 days has ______ ?",
        optionA: "January",
        optionB: "December",
        optionC: "June",
        optionD: "August",
        correctOption: "optionC"
    },

    {
        question: " The number of 3-digit numbers divisible by 6, is …………..?",
        optionA: "150",
        optionB: "159",
        optionC: "151",
        optionD: "166",
        correctOption: "optionD"
    },

    {
        question: " Two number are in ratio 4:5. If the sum of the numbers is 135, find the numbers.?",
        optionA: "50 and 65",
        optionB: "70 and 95",
        optionC: "60 and 75",
        optionD: "65 and 75",
        correctOption: "optionC"
    },

    {
        question: " A car can cover a distance of 522 km on 36 liters of petrol. How far can it travel on 14 liters of petrol ?",
        optionA: "213",
        optionB: "223",
        optionC: "203",
        optionD: "302",
        correctOption: "optionC"
    },

    {
        question: "The function f(x)=x3-6x2+9x+25 has?",
        optionA: "a maxima at x=3 and a minima at x=1",
        optionB: "no maxima , but a minima at x=1",
        optionC: "a maxima at x=1 and a minima at x=3",
        optionD: "a maxima at x, but no minima",
        correctOption: "optionB"
    },

    {
        question: " The minimum value of |x2-5x+21| is?",
        optionA: "-5",
        optionB: "0",
        optionC: "-1",
        optionD: "-11",
        correctOption: "optionA"
    },

    {
        question:"Every boy and girl  __________ in the class today.",
        optionA: "are present",
        optionB: "is present",
        optionC: "have prsent",
        optionD: "had present",
        correctOption: "optionA"
    },

    {
        question: "106 × 106 – 94 × 94 = ?",
        optionA: "2004",
        optionB: "1906",
        optionC: "2400",
        optionD: "1904",
        correctOption: "optionA"
    },

    {
        question: "A clock strikes once at 1 o’clock, twice at 2 o’clock, thrice at 3 o’clock and so on. How many times will it strike in 24 hours?",
        optionA: "58",
        optionB: "122",
        optionC: "78",
        optionD: "166",
        correctOption: "optionB"
    },

    
    {
        question: "The function f(x)=x3-6x2+9x+25 has?",
        optionA: "a maxima at x=3 and a minima at x=1",
        optionB: "no maxima , but a minima at x=1",
        optionC: "a maxima at x=1 and a minima at x=3",
        optionD: "a maxima at x, but no minima",
        correctOption: "optionB"
    },

    {
        question: " The minimum value of |x2-5x+21| is?",
        optionA: "-5",
        optionB: "0",
        optionC: "-1",
        optionD: "-11",
        correctOption: "optionA"
    },

    {
        question:"Every boy and girl  __________ in the class today.",
        optionA: "are present",
        optionB: "is present",
        optionC: "have prsent",
        optionD: "had present",
        correctOption: "optionA"
    },

    {
        question: "106 × 106 – 94 × 94 = ?",
        optionA: "2004",
        optionB: "1906",
        optionC: "2400",
        optionD: "1904",
        correctOption: "optionA"
    },

    {
        question: "A clock strikes once at 1 o’clock, twice at 2 o’clock, thrice at 3 o’clock and so on. How many times will it strike in 24 hours?",
        optionA: "58",
        optionB: "122",
        optionC: "78",
        optionD: "166",
        correctOption: "optionB"
    }
]


let shuffledQuestions = [] //empty array to hold shuffled selected questions out of all available questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
//app would be dealing with 10questions per session
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1 //holds the current question number
let playerScore = 0  //holds the player score
let wrongAttempt = 0 //amount of wrong answers picked by player
let indexNumber = 0 //will be used in displaying next question

// function for displaying next question in the array to dom
//also handles displaying players and quiz information to dom
function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })

    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++ //adding to player's score
            indexNumber++ //adding 1 to index so has to display next question..
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++ //adds 1 to wrong attempts 
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer() //check if player picked right or wrong option
    unCheckRadioButtons()
    //delays next question displaying for a second just for some effects so questions don't rush in on player
    setTimeout(() => {
        if (indexNumber <= 9) {
//displays next question as long as index number isn't greater than 9, remember index number starts from 0, so index 9 is question 10
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()//ends game if index number greater than 9 meaning we're already at the 10th question
        }
        resetOptionBackground()
    }, 1000);
}

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore >= 5 && playerScore < 7) {
        remark = "You chose this dubject but not Good."
        remarkColor = "orange"
    }
    else if (playerScore >= 6) {
        remark = "This subject is Best for your career ."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal, resets game and reshuffles questions
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}