// JS da Tela de Calendário via Web
// Obtém a data atual
let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();

// Seleciona elementos HTML relevantes
const day = document.querySelector(".calendar-dates");
const currdate = document.querySelector(".calendar-current-date");
const prenexIcons = document.querySelectorAll(".calendar-navigation span");

// Lista com os nomes dos meses
const months = [
	"Janeiro",
	"Fevereiro",
	"Março",
	"Abril",
	"Maio",
	"Junho",
	"Julho",
	"Agosto",
	"Setembro",
	"Outubro",
	"Novembro",
	"Dezembro"
];

// Função que cria e manipula o calendário
const manipulate = () => {

	// Obtém o índice do primeiro dia do mês (0 = domingo, 1 = segunda, etc.)
	let dayone = new Date(year, month, 1).getDay();

	// Obtém o último dia do mês (número total de dias no mês)
	let lastdate = new Date(year, month + 1, 0).getDate();

	// Obtém o índice do dia do último dia do mês
	let dayend = new Date(year, month, lastdate).getDay();

	// Obtém o último dia do mês anterior
	let monthlastdate = new Date(year, month, 0).getDate();

	// Variável que armazenará o HTML gerado para o calendário
	let lit = "";

	// Adiciona os últimos dias do mês anterior como "inativos"
	for (let i = dayone; i > 0; i--) {
		lit += `<li class="inactive">${monthlastdate - i + 1}</li>`;
	}

	// Adiciona os dias do mês atual
	for (let i = 1; i <= lastdate; i++) {

		// Verifica se a data atual é hoje
		let isToday = i === date.getDate()
			&& month === new Date().getMonth()
			&& year === new Date().getFullYear()
			? "active"
			: "";
		lit += `<li class="${isToday}">${i}</li>`;
	}

	// Adiciona os primeiros dias do próximo mês como "inativos"
	for (let i = dayend; i < 6; i++) {
		lit += `<li class="inactive">${i - dayend + 1}</li>`
	}

	// Atualiza o texto do elemento com o mês e o ano atual formatados
	currdate.innerText = `${months[month]} ${year}`;

	// Atualiza o HTML do container de datas com o calendário gerado
	day.innerHTML = lit;
}

// chamamento da funcao para renderizar o calendario inicialmente
manipulate();

// Adiciona um listener de clique para os ícones de navegação (próximo e anterior)
prenexIcons.forEach(icon => {

	// Quando um ícone é clicado
	icon.addEventListener("click", () => {
		
		// Verifica se o ícone clicado é "anterior" ou "próximo"
		month = icon.id === "calendar-prev" ? month - 1 : month + 1;

		// Verifica se o mês está fora do intervalo permitido (0 a 11)
		if (month < 0 || month > 11) {

			// Ajusta a data para o primeiro dia do novo mês/ano
			date = new Date(year, month, new Date().getDate());

			// Atualiza o ano e o mês para os valores corretos
			year = date.getFullYear();
			month = date.getMonth();
		}

		else {

			// Mantém a data como o dia atual
			date = new Date();
		}

		// Chama a função para atualizar a exibição do calendário
		manipulate();
	});
});
