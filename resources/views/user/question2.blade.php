@extends('layouts.app')
@section('content')
<br><br>
    <style>
        .question{
  font-size: 30px;
  margin-bottom: 10px;
}
.answers {
  margin-bottom: 20px;
  text-align: left;
  display: inline-block;
}
.answers label{
  display: block;
  margin-bottom: 10px;
}
button{
  font-family: 'Work Sans', sans-serif;
  font-size: 22px;
  background-color: #279;
  color: #fff;
  border: 0px;
  border-radius: 3px;
  padding: 20px;
  cursor: pointer;
  margin-bottom: 20px;
}
button:hover{
  background-color: #38a;
}
.slide{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.5s;
}
.active-slide{
  opacity: 1;
  z-index: 2;
}
.quiz-container{
  position: relative;
  height: 200px;
  margin-top: 40px;
}   

</style>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-0">
                <div class="card">
                    <div class="card-header">
                       Question Multiple Choice
                    </div>
                    <div class="card-body">
                        <div class="quiz-container">
                            <div id="quiz"></div>
                          </div>
                          <button id="previous">Previous Question</button>
                          <button id="next">Next Question</button>
                          <button id="submit">Submit Quiz</button>
                          <div id="results"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function(){
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
        const answers = [];

        // and for each available answer...
        for(letter in currentQuestion.answers){

          // ...add an HTML radio button
          answers.push(
            `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
          );
        }

        // add this question and its answers to the output
        output.push(
          `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join('');
  }

  function showResults(){
    //url sertifikat
    let url = "{{ route('user.certificate') }}";

    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll('.answers');

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach( (currentQuestion, questionNumber) => {

      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if(userAnswer === currentQuestion.correctAnswer){
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = 'lightgreen';
      }
      // if answer is wrong or blank
      else{
        // color the answers red
        answerContainers[questionNumber].style.color = 'red';
      }
    });

    // show number of correct answers out of total
    // resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;

    if (numCorrect === myQuestions.length) {
        resultsContainer.innerHTML = 'Selamat kamu benar semua. <br><br>';
        
    } else {
        resultsContainer.innerHTML = 'Ayo Kerjakan lagi dengan teliti !';
    }
    
    
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;
    if(currentSlide === 0){
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  // Variables
  const quizContainer = document.getElementById('quiz');
  const resultsContainer = document.getElementById('results');
  const submitButton = document.getElementById('submit');
  const myQuestions = [
    {
      question: "Salah satu sumber daya atau layanan yang disediakan oleh cloud provider adalah ?",
      answers: {
        a: "Komputasi",
        b: "Keuangan",
        c: "Pembukuan"
      },
      correctAnswer: "a"
    },
    {
      question: "Skalabilitas dibagi menjadi 2 yaitu",
      answers: {
        a: "Vertical Scaling dan Scaling Up",
        b: "Horizontal scaling dan Scaling Out ",
        c: "Vertical Scaling dan Scaling Out"
      },
      correctAnswer: "c"
    },
    {
      question: "Office 365, Gmail dan Google Drive merupakan jenis layanan ",
      answers: {
        a: "IaaS",
        b: "PaaS",
        c: "SaaS",
      },
      correctAnswer: "c"
    }
  ];

  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners
  submitButton.addEventListener('click', showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();

    </script>
@endsection