function start() {
    if (annyang) {
        annyang.setLanguage("es-CO")
        annyang.start({ autoRestart: true, continuous: false });
        console.log("Listening...")
        annyang.addCommands(comandos);
        document.getElementById("btn").style.display = "none"
    }
}
annyang.debug()

let bandera = false;
annyang.addCallback('soundstart', function() {
    if (!bandera) {
        document.getElementById("all2").style.display = "block"
        setTimeout(() => {
            voz('Bienvenido de nuevo')
            bandera = true;
        }, 1000);
    }
    console.log("sound detected")
});

annyang.addCallback('result', function() {
    console.log('sound stopped');
});


const comandos = {
    // SALUDO
    "okey Frost": () => {
        voz("Bienvenido de nuevo, señor");
    },

    "hey Frost": () => {
        voz("Bienvenido de nuevo, señor");
    },

    "Buenos días Frost": () => {
        voz("Buenos días, señor");
    },

    "Buenas tardes Frost": () => {
        voz("Buenas tardes, señor");
    },

    "Buenas noches": () => {
        voz("Buenas noches, señor");
    },

    // DESPEDIDA

    "Hasta mañana Frost": () => {
        voz("Hasta mañana, señor");
        annyang.abort()
    },

    "Hasta luego": () => {
        voz("Hasta luego, señor");
        annyang.abort()
    },

    "Adios Frost": () => {
        voz("Hasta luego, señor");
        annyang.abort()
    },

    "Apagate Frost": () => {
        voz('ok, hasta luego, señor')
        annyang.abort();
    },

    "apagate por": tiempo => {
        voz('ok, vuelvo en' + tiempo + 'minutos');
        annyang.abort();
        setTimeout(() => {
            annyang.start();
            voz('Hola, he vuelto, ¿me extrañaste?')
        }, tiempo * 60000);
    },

    // PREGUNTAS

    "qué hora es": () => {
        var date = new Date;
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;

        voz('señor, son las ' + strTime)
    },

    "cuál es tu creador": () => {
        voz("El desarrollador wiliam morales");
    },

    "qué eres": () => {
        voz("soy un asistente virtual");
    },

    "para que fuiste creada": () => {
        voz("Para ayudar a las personas");
    },

    "cuál es tu nombre": () => {
        voz("mi nombre es Frost");
    },

    "qué fecha es hoy": () => {
        var date = new Date;
        var mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]
        voz("hoy es " + date.getDate() + " de " + mes[date.getMonth()] + "del" + date.getFullYear());
    },

    "qué día es hoy": () => {
        var date = new Date;
        var dia = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"]
        voz("hoy es " + dia[date.getDay() - 1]);
    },

    // ORDENES

    "cuéntame un chiste": () => {
        var chistes = ["¿Por qué las focas del circo miran siempre hacia arriba?, Porque es donde están los focos",
            "¡Estás obsesionado con la comida!, No sé a que te refieres croquetamente",
            "¿Por qué estás hablando con esas zapatillas?, Porque pone converse",
            "¿Sabes cómo se queda un mago después de comer?, magordito",
            "Me da un café con leche corto, Se me ha roto la máquina, cambio",
            "¡Camarero! Este filete tiene muchos nervios, Normal, es la primera vez que se lo comen",
            "Hola, ¿está Agustín?, No, estoy incomodín",
            "¿Cuál es la fruta más divertida?, la naranja ja ja"
        ];

        var ran = Math.floor(Math.random() * chistes.length);
        voz(chistes[ran])
    },

    "apagado": () => {
        voz("entendido, hasta luego señor");
        location.reload();
    },

    "limpia la consola": () => {
        voz("entendido");
        console.clear();
    },

    "busca *busqueda": busqueda => {
        voz("ok, buscando " + busqueda + " para ti");
        window.open("https://www.google.com/search?q=" + busqueda)
    },

    "abre *busqueda": busqueda => {
        voz("ok, abriendo " + busqueda + " para ti");
        window.open("https://www.amazon.com/?&tag=googleglobalp-20&ref=pd_sl_7nnedyywlk_e&adgrpid=82342659060&hvpone=&hvptwo=&hvadid=585475370855&hvpos=&hvnetw=g&hvrand=5989762046142437614&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9069516&hvtargid=kwd-10573980&hydadcr=2246_13468515&gclid=CjwKCAjwlqOXBhBqEiwA-hhitMfUp5r94tAQ8MQ_Pj5V62Rh9HA9WoP9w-yKTIf_q-S9YdJu9BHeRRoCxYgQAvD_BwE" + busqueda)
    },

    // dance
    "quiero escuchar *busqueda": busqueda => {
        voz("ok, buscando " + busqueda + "para ti");
        window.open("https://www.youtube.com/watch?v=EbHxWU52ZH0" + busqueda)
    },

// electronica
    "buscar *busqueda": busqueda => {
        voz("ok, buscando " + busqueda + "para ti");
        window.open("https://www.youtube.com/watch?v=ZAFFYm6r68E" + busqueda)
    },

    
    "tengo hambre *busqueda": busqueda => {
        voz("ok, buscando " + busqueda + "para ti");
        window.open("https://www.mcdonalds.com.ec/" + busqueda)
    },

    // vachata
    "reproduce *busqueda": busqueda => {
        voz("ok, reproduciendo " + busqueda + "para ti");
        window.open("https://www.youtube.com/watch?v=DJUAXq-_y6M" + busqueda)
    },

    "llama al *telefono": telefono => {
        voz("ok, con gusto llamando al" + telefono);
        window.open("tel:" + telefono)
    },

    "repite *frase": frase => {
        voz(frase);
    },
    "escribe *dicto": dicto => {
        document.getElementById("text").innerHTML = dicto;
    },

    // AMABILIDAD

    "gracias": () => {
        voz("Para servirte señor");
    },

    "ulala": () => {
        voz('Áhi me hace sonrojar señor')
    },

    "Cómo estás": () => {
        voz('mejor que ayer, espero que usted tambien lo esté, señor')
    },

    "Te presento a *nombre": nombre => {
        voz("Hola" + nombre + ", mi nombre es Frost, es un placer conocerte");
    },

    "Te presento *nombres": nombres => {
        voz("Hola" + nombres + ", mi nombre es Frost, es un placer conocerlos y les doy una calida bienvenida");
    },


    // LLAMADA A LA ACCIÓN

    "Frost": () => {
        voz("aquí estoy, señor");
    },

    "Hey": () => {
        voz("aquí estoy, señor");
    },

    "Hola": () => {
        voz("aquí estoy señor");
    },

    "Me puedes ayudar": () => {
        voz("claro que sí");
    },

    "Oye": () => {
        voz("aquí estoy, señor");
    },

    "Estás ahí": () => {
        voz("aquí estoy, señor");
    }

}

function voz(texto) {
    document.getElementById("all2").style.visibility = "hidden";
    var textoAEscuchar = texto;
    var mensaje = new SpeechSynthesisUtterance();
    mensaje.text = textoAEscuchar;
    mensaje.volume = 5;
    mensaje.rate = 0.9;
    mensaje.pitch = 1;
    // ¡Parla!
    document.getElementById("all").style.visibility = "visible";
    setTimeout(() => {
        document.getElementById("all").style.visibility = "hidden";
        document.getElementById("all2").style.visibility = "visible";
    }, 4000);
    speechSynthesis.speak(mensaje);
}