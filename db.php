<?php

/* https://image.tmdb.org/t/p/w500/ */

$moviesArray = '[
    {
      "original_title": "The Dark Knight",
      "overview":
        "Il crimine organizzato a Gotham City ha le ore contate. Batman, il tenente Gordon, il nuovo Procuratore Distrettuale e alcuni improbabili epigoni dell\'Uomo Pipistrello in imbottiture da hockey hanno dichiarato guerra ai criminali. La loro fortuna e i loro dollari, accumulati in una banca di massima sicurezza, vengono rubati da Joker, un pagliaccio sadico e mascherato che getterà la città nel disordine e nell\'anarchia. Riempite le tasche di lame, polvere da sparo e lanugine, Joker sfiderà il cavaliere oscuro di Bruce Wayne e rivelerà il lato oscuro di Harvey Dent, l\'eroe procuratore che applica la giustizia e agisce a volto scoperto.",
      "poster_path": "https://image.tmdb.org/t/p/w500/qIhsgno1mjbzUbs4H6DaRjhskAR.jpg",
      "year": "2008",
      "title": "Il cavaliere oscuro",
      "vote_average": 8.5
    },
    {
      "original_title": "千と千尋の神隠し",
      "overview":
        "La piccola Chihiro non sopporta l\'idea di traslocare e di perdere i propri amici, ma non può far niente per impedirlo. Proprio quando la famiglia è in viaggio verso la nuova casa, il padre imbocca una strada sterrata che termina davanti a un tunnel misterioso. I genitori sceglieranno di attraversarlo nonostante le rimostranze di Chihiro, per giungere a un parco dei divertimenti abbandonato, almeno apparentemente.",
      "poster_path": "https://image.tmdb.org/t/p/w500/3PV6lq9BNmoyyDXr5tdNeeESEMn.jpg",
      "year": "2001",
      "title": "La città incantata",
      "vote_average": 8.5
    },
    {
      "original_title": "Back to the Future",
      "overview":
        "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più \"carburante\" per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l\'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all\'epoca teenager, ma l\'incontro aggiungerà altri problemi.",
      "poster_path": "https://image.tmdb.org/t/p/w500/AkmUoSHkxW9txpzZ52gCcWweEkE.jpg",
      "year": "1985",
      "title": "Ritorno al futuro",
      "vote_average": 8.3
    },
    {
      "original_title": "Ovosodo",
      "overview":
        "La storia di Ovosodo racconta la vita di Piero partendo dalla sua infanzia fino alla paternità. Lo sfondo è la città natale del regista Paolo Virzi, Livorno.",
      "poster_path": "https://image.tmdb.org/t/p/w500/s3HeCD1a74Tl9EgSA6UU7O6tpAJ.jpg",
      "year": "1997",
      "title": "Ovosodo",
      "vote_average": 7.2
    },
    {
      "original_title": "Donnie Darko",
      "overview":
        "Il liceale Donnie Darko, in preda ad un attacco di insonnia, esce dalla casa dei genitori e incontra uno spaventoso coniglio gigante di nome Frank, che gli dice che il mondo finirà tra 28 giorni, 6 ore, 42 minuti e 12 secondi.",
      "poster_path": "https://image.tmdb.org/t/p/w500/26hBcVJp8Ix2Bmg7xTj7BYjDZZ1.jpg",
      "year": "2001",
      "title": "Donnie Darko",
      "vote_average": 7.8
    }
]';

$phpMovies = json_decode($moviesArray, true);





//var_dump($phpMovies);



