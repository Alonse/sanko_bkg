import './compass.scss'
import 'remodal';
import $ from "jquery";

let data = {
    '0': {
        'question': 'Вы ищете что-то для себя или для своей компании?',
        'optionOne': 'Для компании',
        'optionTwo': 'Для себя',
        'optionThree': ' ',
        'step': 'Привет!',
    },
    '01': {
        'question': 'Что вас больше интересует?',
        'optionOne': 'Обучение',
        'optionTwo': 'Консультации',
        'optionThree': ' ',
        'step': 'Шаг 2',
    },
    '02': {
        'question': 'Что вас больше интересует?',
        'optionOne': 'Учиться',
        'optionTwo': 'Действовать',
        'optionThree': ' ',
        'step': 'Шаг 2',
    },
    '011': {
        'question': 'Вас больше интересуют тренинги и обучающие программы или коуч-сертификация?',
        'optionOne': 'Тренинги и обучающие программы',
        'optionTwo': 'Сертификация',
        'optionThree': ' ',
        'step': 'Шаг 3',
    },
    '012': {
        'question': 'Какой вариант Вам больше подходит?',
        'optionOne': 'Консультация по процессам компании',
        'optionTwo': 'Индивидуальная консультация для руководителя',
        'optionThree': ' ',
        'step': 'Шаг 3',
    },
    '021': {
        'question': 'Что Вам больше подходит?',
        'optionOne': 'Обучение и сертификация',
        'optionTwo': 'Консультация',
        'optionThree': ' ',
        'step': 'Шаг 3',
    },
    '022': {
        'question': 'Что бы Вы предпочли?',
        'optionOne': 'Расслабиться',
        'optionTwo': 'Вступить в сообщество',
        'optionThree': ' ',
        'step': 'Шаг 3',
    },

    '0111': {
        'question': 'Что Вам больше подходит?',
        'optionOne': 'Тренинги',
        'optionTwo': 'Обучающие прорграммы',
        'optionThree': ' ',
        'step': 'Шаг 4',
    },
    '0121': {
        'question': 'Какая область Вас больше интересует?',
        'optionOne': 'Сопровождение и внедрение изменений',
        'optionTwo': 'Проведение стратегических сессий',
        'optionThree': 'Управление культурой',
        'step': 'Шаг 4',
    },

    '0211': {
        'question': 'Что Вас больше интересует?',
        'optionOne': 'Тренинги',
        'optionTwo': 'Коуч-сертификация',
        'optionThree': ' ',
        'step': 'Шаг 4',
    },

    '01111': {
        'question': 'Какой формат тренингов Вам больше подходит?',
        'optionOne': 'Offline',
        'optionTwo': 'Online',
        'optionThree': ' ',
        'step': 'Шаг 5',
    },
    '01112': {
        'question': 'Что Вас больше интересует?',
        'optionOne': 'Долгосрочные программы развития руководителей',
        'optionTwo': 'Разработка внутреннего тренинга в области эмоционального интеллекта',
        'optionThree': ' ',
        'step': 'Шаг 5',
    },

    '02111': {
        'question': 'Какой формат тренингов Вам больше подходит?',
        'optionOne': 'Offline',
        'optionTwo': 'Online',
        'optionThree': ' ',
        'step': 'Шаг 5',
    },

    '011111': {
        'question': 'Развитию каких областей должен способствовать тренинг?',
        'optionOne': 'Лидерские навыки',
        'optionTwo': 'Осознанность и эмоциональный интеллект',
        'optionThree': 'Стрессоустойчивость',
        'step': 'Шаг 6',
    },
    '011112': {
        'question': 'Какая тема Вас больше интересует?',
        'optionOne': 'Долгосрочное развитие руководителей (методика Action Learning)',
        'optionTwo': 'Однодневный тренинг по применению практических инструментов управления своими эмоциями и позитивного влияния на эмоциональный климат вашего окружения',
        'optionThree': 'Однодневный тренинг по применению практических инструментов управления стрессом',
        'step': 'Шаг 6',
    },

    '021111': {
        'question': 'Что Вас больше интересует?',
        'optionOne': 'Уникальная интерактивная двухдневная программа основанная на практиках осознанности и разработанная в Google',
        'optionTwo': 'Обзорный двухчасовой тренинг техник медитации,управления стрессом, развития эмоционального интеллекта, эмпатии и управления вниманием',
        'optionThree': 'Однодневный тренинг по освоению практических навыков стрессоустойчивости, управления своими эмоциями и позитивного влияния на других',
        'step': 'Шаг 6',
    },
    '021112': {
        'question': 'Что Вас больше интересует?',
        'optionOne': 'Обзорный двухчасовой тренинг техник медитации,управления стрессом, развития эмоционального интеллекта, эмпатии и управления вниманием',
        'optionTwo': 'Трехчасовой вечерний онлайн тренинг по глубокому расслаблению',
        'optionThree': ' ',
        'step': 'Шаг 6',
    },
    '0111111': {
        'question': 'Что Вам больше подходит?',
        'optionOne': 'Интерактивный однодневный тренинг по развитию навыков командообразования, коучингового лидерства, активного слушания и решения проблем',
        'optionTwo': 'Тренинг по созданию устойчивых, сплоченных самоорганизующихся команд и решению актуальных проблем компании',
        'optionThree': ' ',
        'step': 'Шаг 7',
    },
    '0111112' : {
        'question': 'Что Вам больше подходит?',
        'optionOne': 'Уникальная интерактивная двухдневная программа основанная на практиках осознанности и разработанная в Google',
        'optionTwo': 'Однодневный тренинг по применению практических инструментов управления своими эмоциями и позитивного влияния на эмоциональный климат вашего окружения',
        'optionThree': ' ',
        'step': 'Шаг 7',
    },
    '0111113' : {
        'question': 'Что Вам больше подходит?',
        'optionOne': 'Однодневный тренинг по применению практических инструментов управления стрессом',
        'optionTwo': 'Однодневный разгрузочный тренинг по снижению уровня стресса в интерактивном формате',
        'optionThree': ' ',
        'step': 'Шаг 7',
    },

}

let outputKeys = {
    '0112': {
        'href': 'https://denissanko.com/deyatelnost/razvitie-liderov/?params=tab4',
    },

    '0122': {
        'href': 'https://denissanko.com/deyatelnost/individualnyj-kouching/',
    },

    '0212': {
        'href': 'https://denissanko.com/deyatelnost/individualnyj-kouching/',
    },
    '0221': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab4',
    },
    '0222': {
        'href': 'https://denissanko.com/deyatelnost/programmy-online-formata/?params=tab5',
    },
    '01211': {
        'href': 'https://denissanko.com/deyatelnost/strategiya-i-izmeneniya/?params=tab2',
    },
    '01212': {
        'href': 'https://denissanko.com/deyatelnost/strategiya-i-izmeneniya/?params=tab1',
    },
    '01213': {
        'href': 'https://denissanko.com/deyatelnost/strategiya-i-izmeneniya/?params=tab3',
    },

    '02112': {
        'href': 'https://denissanko.com/deyatelnost/razvitie-liderov/?params=tab4',
    },

    '011121': {
        'href': 'https://denissanko.com/deyatelnost/razvitie-liderov/?params=tab3',
    },
    '011122': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab4',
    },

    '0111121': {
        'href': 'https://denissanko.com/deyatelnost/programmy-online-formata/?params=tab4',
    },
    '0111122': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab2',
    },
    '0111123': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab3',
    },
    '0211111': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab1',
    },
    '0211112': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab2',
    },
    '0211113': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab3',
    },
    '0211121': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab2',
    },
    '0211122': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs2&params=tab4',
    },
    '01111111': {
        'href': 'https://denissanko.com/deyatelnost/razvitie-liderov/?params=tab1',
    },
    '01111112': {
        'href': 'https://denissanko.com/deyatelnost/razvitie-liderov/?params=tab2',
    },
    '01111121': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab1',
    },
    '01111122': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab2',
    },
    '01111131': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab3',
    },
    '01111132': {
        'href': 'https://denissanko.com/deyatelnost/osoznannost-eq/?param=tabs1&params=tab5',
    },

}

let buttons = document.querySelectorAll('.compass__button');
let cardDescription = document.querySelector('.compass__description');
let key = '0';
let question = document.querySelector('.compass__question');
let optionOne = document.getElementById('option-one');
let optionTwo = document.getElementById('option-two');
let optionThree = document.getElementById('option-three');
let step = document.querySelector('.compass__title-text');
let outputLink = document.querySelector('.compass__output-link');
let stepBack = document.querySelector('.compass__step-back');


function changeStep () {

    if (data.hasOwnProperty(key)) {

        buttons.forEach((element) => {
            element.style.display = "block";
            question.style.display = "block";
            outputLink.style.display = "none";
        })

        question.textContent = data[key]['question'];
        optionOne.textContent = data[key]['optionOne'];
        optionTwo.textContent = data[key]['optionTwo'];
        optionThree.textContent = data[key]['optionThree'];
        step.textContent = data[key]['step'];
        optionThree.textContent === ' ' ? (optionThree.style.display = "none") :  (optionThree.style.display = "block");
        cardDescription.textContent = '';


    } else {
        step.textContent = 'Готово';
        cardDescription.textContent = 'Спасибо! Продукт, подходящий под Ваши потребности:';
        outputLink.setAttribute('href', outputKeys[key]['href']);

        buttons.forEach((element) => {
            element.style.display = "none";
            question.style.display = "none";
            outputLink.style.display = "block";
        })
    }
}


buttons.forEach((element) => {


    element.addEventListener('click', function () {

        let attr = element.getAttribute('data-value');
        key += attr;

        changeStep();

        if (key === '0') {
            stepBack.style.display = "none";
        } else {
            stepBack.style.display = "flex";
        }

    })
})

stepBack.addEventListener('click', function () {
    key = key.slice(0, -1);
    changeStep();

    if (key === '0') {
        stepBack.style.display = "none";
        cardDescription.textContent = 'Я с удовольствием помогу Вам в выборе области развития! Для этого, пожалуйста, ответьте а несколько вопросов:';
    } else {
        stepBack.style.display = "flex";
    }

})