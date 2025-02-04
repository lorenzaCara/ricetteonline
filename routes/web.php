<?php

/* $recipes = [
    'pasta-al-sugo' => [
        'title' => 'pasta al sugo'
    ],
    'arrosto-misto' => [
        'title' => 'arrosto misto'
    ]
];

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/recipes/{recipe}', function ($recipe) use ($recipes) {
    var_dump($recipes[$recipe]);
    return 'ciao pippo';
}); */

use Illuminate\Support\Facades\Route;

$recipes = [
    'pasta carbonara' => [
        'name' => 'Pasta Carbonara',
        'image' => 'https://images.pexels.com/photos/546945/pexels-photo-546945.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Un classico della cucina italiana, la Carbonara è amata in tutto il mondo per il suo sapore unico.',
        'time' => '20 min',
        'difficulty' => 'Facile',
        'ingredients' => ['Spaghetti', 'Uova', 'Guanciale', 'Pecorino Romano', 'Pepe Nero'],
        'steps' => [
            'Cuocere la pasta in acqua salata.',
            'Rosolare il guanciale fino a renderlo croccante.',
            'Sbattere le uova con pecorino e pepe.',
            'Scolare la pasta e mescolarla con il guanciale, poi aggiungere le uova e amalgamare.'
        ]
    ],
    'tiramisu' => [
        'name' => 'Tiramisù',
        'image' => 'https://images.pexels.com/photos/30372662/pexels-photo-30372662/free-photo-of-delizioso-rotolo-di-tiramisu-svizzero-su-piatto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Il dolce italiano per eccellenza, con strati di savoiardi e crema al mascarpone.',
        'time' => '30 min + riposo',
        'difficulty' => 'Media',
        'ingredients' => ['Savoiardi', 'Mascarpone', 'Uova', 'Caffè', 'Cacao'],
        'steps' => [
            'Preparare il caffè e lasciarlo raffreddare.',
            'Montare mascarpone e uova fino a ottenere una crema soffice.',
            'Inzuppare i savoiardi nel caffè e disporli in una teglia.',
            'Alternare strati di savoiardi e crema al mascarpone.',
            'Spolverare con cacao amaro e lasciare in frigo per almeno 2 ore.'
        ]
    ],
    'lasagna alla bolognese' => [
        'name' => 'Lasagna alla Bolognese',
        'image' => 'https://images.pexels.com/photos/4079520/pexels-photo-4079520.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'La tradizione della lasagna con ragù di carne e besciamella.',
        'time' => '1 ora 30 min',
        'difficulty' => 'Difficile',
        'ingredients' => ['Lasagne', 'Ragù di carne', 'Besciamella', 'Parmigiano Reggiano', 'Burro'],
        'steps' => [
            'Preparare il ragù di carne e la besciamella.',
            'Cuocere le lasagne in acqua salata.',
            'Alternare strati di lasagna, ragù e besciamella in una teglia.',
            'Terminare con uno strato di parmigiano e burro.',
            'Cuocere in forno per 45 minuti.'
        ]
    ],
    'risotto ai funghi' => [
        'name' => 'Risotto ai Funghi',
        'image' => 'https://images.pexels.com/photos/11190138/pexels-photo-11190138.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Un risotto cremoso e ricco di sapore grazie ai funghi porcini.',
        'time' => '35 min',
        'difficulty' => 'Media',
        'ingredients' => ['Riso Arborio', 'Funghi porcini', 'Brodo vegetale', 'Parmesan', 'Burro'],
        'steps' => [
            'Rosolare i funghi in una padella con olio e aglio.',
            'Aggiungere il riso e tostare per un paio di minuti.',
            'Aggiungere brodo caldo un mestolo alla volta, mescolando continuamente.',
            'Completare con burro e parmigiano.'
        ]
    ],
    'pizza margerita' => [
        'name' => 'Pizza Margherita',
        'image' => 'https://images.pexels.com/photos/12096782/pexels-photo-12096782.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'La pizza italiana più famosa, con pomodoro, mozzarella e basilico fresco.',
        'time' => '1 ora 30 min',
        'difficulty' => 'Facile',
        'ingredients' => ['Impasto per pizza', 'Pomodoro', 'Mozzarella di bufala', 'Basilico fresco', 'Olio d\'oliva'],
        'steps' => [
            'Preparare l’impasto e farlo lievitare.',
            'Stendere l’impasto e aggiungere pomodoro e mozzarella.',
            'Cuocere in forno ad alta temperatura per circa 15 minuti.',
            'Aggiungere basilico e olio d’oliva prima di servire.'
        ]
    ],
    'zuppa di lenticchie' => [
        'name' => 'Zuppa di Lenticchie',
        'image' => 'https://images.pexels.com/photos/2960581/pexels-photo-2960581.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Un piatto sano e nutriente, ricco di proteine grazie alle lenticchie.',
        'time' => '40 min',
        'difficulty' => 'Facile',
        'ingredients' => ['Lenticchie', 'Carote', 'Sedano', 'Cipolla', 'Pomodoro'],
        'steps' => [
            'Soffriggere cipolla, carote e sedano in olio d’oliva.',
            'Aggiungere le lenticchie e coprire con acqua.',
            'Cuocere per 30 minuti, aggiungendo il pomodoro a metà cottura.',
            'Aggiustare di sale e pepe prima di servire.'
        ]
    ],
    'pollo al curry' => [
        'name' => 'Pollo al Curry',
        'image' => 'https://images.pexels.com/photos/9218754/pexels-photo-9218754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Un piatto speziato e ricco di sapore, perfetto per gli amanti dei piatti esotici.',
        'time' => '45 min',
        'difficulty' => 'Media',
        'ingredients' => ['Pollo', 'Curry in polvere', 'Cocco', 'Cipolla', 'Aglio'],
        'steps' => [
            'Rosolare il pollo in olio e cipolla.',
            'Aggiungere il curry e cuocere per qualche minuto.',
            'Versare il latte di cocco e far cuocere fino a che il pollo è ben cotto.',
            'Servire con riso basmati.'
        ]
    ],
    'crostata di marmellata' => [
        'name' => 'Crostata di Marmellata',
        'image' => 'https://images.pexels.com/photos/4040695/pexels-photo-4040695.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'description' => 'Un dolce semplice ma goloso, perfetto per ogni occasione.',
        'time' => '1 ora',
        'difficulty' => 'Facile',
        'ingredients' => ['Pasta frolla', 'Marmellata di frutti di bosco', 'Zucchero a velo'],
        'steps' => [
            'Stendere la pasta frolla in una teglia.',
            'Spalmare uno strato di marmellata.',
            'Cuocere in forno per 30-35 minuti.',
            'Spolverare con zucchero a velo prima di servire.'
        ]
    ]
];


Route::get('/', function () use ($recipes) {
    return view('pages.homepage', ['recipes' => $recipes]);
});

Route::get('/recipes/{slug}', function ($slug) use ($recipes) {
    return view('pages.recipe', ['recipe' => $recipes[$slug], 'recipes' => $recipes]);
});

/* Route::get('/recipes/{id}', function ($id) use ($recipes) {
    return view('pages.recipe', ['recipe' => $recipes[$id], 'recipes' => $recipes]);
}); */



// /recipes/pasta-al-pomodoro
// /recipes/arrosto-misto