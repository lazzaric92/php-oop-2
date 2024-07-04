<?php 
require_once __DIR__ . "/../Classes/Products/Food.php";
require_once __DIR__ . "/../Classes/Products/Toy.php";
require_once __DIR__ . "/../Classes/Products/Accessory.php";
require_once __DIR__ . "/../Classes/Categories/Dog.php";
require_once __DIR__ . "/../Classes/Categories/Cat.php";
require_once __DIR__ . "/../Classes/Categories/Fish.php";
require_once __DIR__ . "/../Classes/Categories/Bird.php";

$productsArray= [
"royalDogMiniAd" => new Food("Royal Canin Mini Adult", "43,99", "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", new Dog("Piccola taglia", "Adulto"), 9000, "prosciutto, riso"),

"anDogHolisticMdLg" => new Food("Almo Nature Holistic Mantenance Medium Large Tonno e Riso", "44,99", "https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg", new Dog("Taglie media e grande", "Adulto"), 12000, "tonno e riso"),

"anCatDaily" => new Food("Almo Nature Cat Daily Lattina", "34,99", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", new Cat("Adulto"), 400, "vitello"),

"guppyFlakes" => new Food("Mangime per Pesci Guppy in Fiocchi", "2,95", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", new Fish("Pesci di acqua dolce"), 30, "Pesci e sottoprodotti dei pesci, cereali, lieviti e alghe"),

"volieraWilma" => new Accessory("Voliera Wilma in Legno", "184,99", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", new Bird("Cocorite"), "Legno", "M: L 83 x P 67 x H 153 cm"),

"easyCrystalFilter" => new Accessory("Cartucce Filtranti per Filtro EasyCrystal", "2,29", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", new Fish("Pesci di acqua dolce"), "Materiale espanso", "ND"),

"kong" => new Toy("Kong Classic", "13,49", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", new Dog("Cani di taglia media", "Adulto"), "Galleggia e rimbalza", "8,5 cm x 10 cm"),

"trixieMouse" => new Toy("Topini di peluche Trixie", "4,99", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", new Cat("Adulto"), "Morbido con codina in corda", "8,5 cm x 10 cm"),

];
