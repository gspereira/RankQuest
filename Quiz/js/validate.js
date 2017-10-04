
const quizContainer = document.getElementById('quiz');
const resultContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');

function buildQuiz(){
	//Guarda o HTML
	const output = [];

	//Código a ser executado para cada questão.
	questions.forEach(
		(currentQuestion, questionNumber) => {
			//Guarda a opção escolhida
			const answers = [];

			//Adiciona no HTML, uma opção para cada resposta
			for(letter in currentQuestion.answers){
				answers.push(
					`<label>
						<input type="radio" name="question${questionNumber}" value="${letter}">
            			${letter} :
            			${currentQuestion.answers[letter]}
          			</label>`
				);
			}

			//Adiciona a pergunta atual e sua resposta ao HTML
			output.push(
				`<div class="question"> ${currentQuestion.question} </div>
        		<div class="answers"> ${answers.join('')} </div>`
			);
		}
	);
	//Combina em uma String com todo o código em HTML formado
	quizContainer.innerHTML = output.join('');
}

function showResults(){
	//Puxa as respostas do quiz
	const answerContainers = quizContainer.querySelectorAll('.answers');

	//Guarda as respostas corretas do usuário
	let numCorrect = 0;

	//Para cada pergunta...
	questions.forEach(
		(currentQuestion, questionNumber) => {

			//Encontra a resposta selecionada
			const answerContainer = answerContainers[questionNumber];
			const selector = 'input[name=question'+questionNumber+']:checked';
			const userAnswer = (answerContainer.querySelector(selector) || {}).value;

			//Se a resposta for correta
			if(userAnswer===currentQuestion.correctAnswer){
				//Aumenta o número de acertos
				numCorrect++;

				//Muda a cor da resposta para verde (sucesso)
				answerContainers[questionNumber].style.color = 'lightgreen';
			}

			//Se a resposta está incorreta ou em branco
			else{
				//Muda a cor da resposta para vermelho
				answerContainers[questionNumber].style.color = 'red';
			}
	});

	//Mostra o total de acertos
	resultContainer.innerHTML ='Acertou ' + numCorrect + ' de ' + questions.length;
}

//Perguntas e Respostas
const questions = [
	{
		question: "Quantas pessoas morreram no ultimo atentado em Las Vegas?",
		answers: {
			a: "23",
			b: "59",
			c: "36",
			d: "51",
			e: "42"
		},
		correctAnswer: "b"
	},
	{
		question: "Qual o valor da soma de 5+5?",
		answers: {
			a: "20",
			b: "13",
			c: "10",
			d: "49",
			E: "1"
		},
		correctAnswer: "c"
	},
	{
		question: "Quantas vezes a palavra FUCK é dita no filme The Wolf of Wall Street ",
		answers: {
			a: "432",
			b: "821",
			c: "652",
			d: "314",
			e: "506"
		},
		correctAnswer: "e"
	}
];

//Constrói o Quiz
buildQuiz();

//Mostra os Resultados do Quiz
submitButton.addEventListener('click', showResults);