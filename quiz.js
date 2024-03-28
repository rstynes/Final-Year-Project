
let questions = [
    {
        id: 1,
        question: "What is phishing?",
        answer:"A social engineering attack aimed at stealing sensitive information",
        options: [
            "A type of fishing technique",
            "A social engineering attack aimed at stealing sensitive information",
            "A computer virus that spreads through emails",
            "A secure method of online communication"
        ]   
    },
    {
        id: 2,
        question: "Which of these is a type of Phishing?",
        answer:"All of these",
        options: [
            "Smishing",
            "Vishing",
            "Email",
            "All of these"
        ]
      },
      {
        id: 3,
        question: "What is the primary goal of a phishing attack?",
        answer: "Extracting sensitive information",
        options: [
          "Spreading malware",
          "Gaining unauthorized access to a system",
          "Extracting sensitive information",
          "Disrupting network communication"
        ]
      },
      {
        id: 4,
        question: "How can you identify a phishing email?",
        answer: "All of the Above",
        options: [
          "The sender's email address looks suspicious or unfamiliar",
          "The email contains urgent requests for personal information",
          "There are spelling and grammar errors in the email",
          "All of the Above"
        ]
      },
      {
        id: 5,
        question: "What should you do if you receive a suspicious email asking for personal information?",
        answer: "Ignore the email and delete it",
        options: [
          "Reply with the requested information",
          "Click on any links provided to verify your identity",
          "Ignore the email and delete it",
          "Forward the email to all your contacts for awarenes"
        ]
      },
      {
        id: 6,
        question: "Which of the following is a common phishing method?",
        answer: "Spoofed emails or websites",
        options: [
          "Brute force attack",
          "Denial-of-service attack",
          "Spoofed emails or websites",
          "Firewall intrusion"
        ]
      },
      {
        id: 7,
        question: "What is the purpose of a phishing website?",
        answer: "To collect sensitive information from users",
        options: [
          "To provide helpful information",
          "To collect sensitive information from users",
          "To promote online safety",
          "To buy Fishing equipment"
        ]
      },
      {
        id: 8,
        question: "What is Smishing?",
        answer: "A phishing attack through text messages",
        options: [
          "A phishing attack through text messages",
          "A phishing attack through smart devices",
          "A phishing attack through emails",
          "None of the Above"
        ]
      },
      {
        id: 9,
        question: "What is a common technique used in phishing emails to create a sense of urgency?",
        answer: "Requesting immediate action or response",
        options: [
          "Providing helpful information",
          "Requesting immediate action or response",
          "Attaching large files",
          "All of the Above"
        ]
      },
      {
        id: 10,
        question: "How can you protect yourself from phishing attacks?",
        answer: "All of the above",
        options: [
          "Regularly update passwords",
          "Be cautious of unexpected emails or messages",
          "Enable two-factor authentication",
          "All of the above"
          
        ]
      },
];

let question_count = 0;
let points = 0;

// Loads question/quiz when the window loads up
window.onload = function(){
    show(question_count);
};
// Displays the current question and answer options
function show(count){
    let question = document.getElementById("questions");
    let[first, second, third, fourth] = questions[count].options;

    question.innerHTML = `<h2>Q${count + 1}. ${questions[count].question}</h2>
    <ul class="option_group">
    <li class="option">${first}</li>
    <li class="option">${second}</li>
    <li class="option">${third}</li>
    <li class="option">${fourth}</li>
    </ul>`;
    // Enables selections
    toggleActive();  
}
// Function to handle answer selection
function toggleActive(){
    let option = document.querySelectorAll("li.option");
    for(let i=0; i < option.length; i++){
        option[i].onclick = function(){
            for(let i=0; i < option.length; i++){
                if(option[i].classList.contains("active")){
                    option[i].classList.remove("active");
                }
            }
            
            option[i].classList.add("active");
        }
    }
}
// Function for button click
function next(){
// Redirects to the finish page if all questions have been answered
    if(question_count == questions.length -1){
        location.href = "after-quiz.html";
    }
    console.log(question_count);

// Get the user's selected answer
let user_answer = document.querySelector("li.option.active").innerHTML;

// Checks if user's answer is correct and updates points
if(user_answer == questions[question_count].answer){
    points += 10;
    sessionStorage.setItem("points",points);
}
console.log(points);

// Move to next question
question_count++;
show(question_count);
}