/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data: {
        links : [
            {text: 'Overview', isActive: true},
            {text: 'Skills', isActive: false},
            {text: 'Contact', isActive: false},

        ],
    }
});

$(document).ready(function(){
    $('.nav-tabs li:first-child').addClass('active');
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});

Chart.defaults.global.defaultFontColor = 'black';
Chart.defaults.global.defaultFontFamily = 'Open Sans';

new Chart(document.getElementById("bar-chart"), {
    type: 'horizontalBar',
    data: {
      labels: ["HTML5/CSS3", "SASS", "JAVASCRIPT", "ANGULAR/REACT", "NODE", "VUE", 
             "PHP", "LARAVEL","OCTOBERCMS","POSTGRESQL/MYSQL", "GIT", "C/C++/JAVA"],
      fontSize: 14,
      datasets: [
        {
          label: "Skill",
          backgroundColor: ["#3282b8",'#0f4c75',"#3282b8",'#0f4c75',"#3282b8",'#0f4c75',"#3282b8",
                          '#0f4c75',"#3282b8",'#0f4c75',"#3282b8",'#0f4c75',"#3282b8",'#0f4c75',],
          data: [90,70,65,60,70,50,70,80,70,75,85,75],
          barPercentage: 0.7,
          categoryPercentage: 0.7,
        //   barThickness: 15,
        //   maxBarThickness: 30,
        //   minBarThickness: 10,
        //   minBarLength: 50,
        }
      ]
    },
    options: {
      responsive: true,
      legend: { display: false },
      title: {
        display: false,
        text: 'Skill',
        showLines: false,
      },
      scales: {
        xAxes: [{
            
            gridLines: {
               display: false,  
            },
            ticks : {
                max : 100,    
                min : 0,
                display : false
            }
         }],
         yAxes: [{
            gridLines: {
               display: false
            },
           
         }]
    },
    layout: {
        padding: {
            left: 0,
            right: 0,
            top: 16,
            bottom: 0
        }
    }
    }
});
