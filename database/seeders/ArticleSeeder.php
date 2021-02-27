<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => "Ligue des champions : en infériorité numérique, l'Atalanta craque en fin de match face au Real",
            'text' => "Dominateur mais peu inspiré, le Real Madrid a attendu la fin de son match de huitième de finale de Ligue des champions pour s'imposer, mercredi, face à l'Atalanta Bergame (0-1). Dans l'autre match de la soirée, Manchester City a disposé du Borussia Mönchengladbach. <br/>Le Real Madrid n'a pas croqué l'Atalanta. En supériorité numérique dès la fin du premier quart d'heure de jeu, les Madrilènes ont attendu la toute fin de leur match pour trouver la faille face à l'Atalanta Bergame grâce à un but de Ferland Mendy (0-1). Dans le dernier huitième de finale de la Ligue des champions, Manchester City a battu le Borussia Mönchengladbach. <br/>L'Atalanta de Gasperini déploie un pressing haut sur ses adversaires qui met très rapidement les Madrilènes sous pression. Les Italiens se projettent rapidement dans le camp adverse en multipliant les combinaisons en une touche de balle. Décimé par les blessures, le Real Madrid ne peut réagir que sur coup de pied arrêté. Kroos enroule un coup franc côté gauche et cherche Casemiro au deuxième poteau. La défense bergasmasque repousse le danger (10e). <br/>Alors que l'Atalanta semble prendre le match en main, une faute de Freuler sur Ferland Mendy à l'entrée de la surface lui vaut un carton rouge. Isco envoie le coup franc dans le mur (18e).",
            "author" => "Mouad KHCHICH",
            'category_id' => 1,
            'image' => "https://s.france24.com/media/display/9b82a806-76e8-11eb-9c81-005056a98db9/w:1280/p:16x9/000_93Q2HT.webp"
        ]);

        DB::table('articles')->insert([
            'title' => "Football africain : qui sont les 4 candidats pour succéder à Ahmad Ahmad à la tête de la CAF ?",
            'text' => "Depuis la chute d'Ahmad Ahmad à l'été 2019, la campagne pour élire un nouveau président de la Confédération africaine de football (CAF) bat son plein sur le continent entre quatre candidats. Tour d'horizon des candidatures alors que le verdict des urnes est attendu le 12 mars.

            Qui pour reprendre le trône d'Ahmad Ahmad à la présidence de la CAF ? Depuis la chute du Malgache à l'été 2019, les manœuvres pour être élu nouveau président de la Confédération africaine de football (CAF) ont agité le continent entre quatre candidats. Les urnes rendront leur verdict le 12 mars prochain à Rabat.
            
            Suspendu cinq ans par la Fifa pour soupçons de corruption, Ahmad Ahmad ne devrait pas se représenter, même s'il y était autorisé par le Tribunal arbitral du sport (TAS), où il passe en appel le 2 mars.",
            'category_id' => 1,
            "author" => "Mouad KHCHICH",
            'image' => "https://s.france24.com/media/display/caeb198e-777e-11eb-bd59-005056a964fe/w:1280/p:16x9/000_YL20U.webp"
        ]);

        DB::table('articles')->insert([
            'title' => "Après rotterdam, rafael nadal déclare forfait pour acapulco en raison d'une blessure à l'épaule",
            'text' => "Triple vainqueur à Acapulco, Rafael Nadal passera son tour en 2021. L'Espagnol, numéro 2 mondial, a déclaré forfait pour le tournoi mexicain (15-21 mars), en raison d'un problème d'épaule, a-t-il annoncé vendredi sur son compte Twitter. \"Je suis désolé de ne pas pouvoir participer au tournoi d'Acapulco. C'est une année difficile pour tout le monde et en raison de mon état de santé actuel, de ma douleur à l'épaule, c'est impossible que je fasse un voyage aussi long. Rendez-vous en 2022 !\", a écrit le champion espagnol.
            Goffin et Bautista-Agut ont rendez-vous en finaleGoffin et Bautista-Agut ont rendez-vous en finale.
            Nadal, 34 ans, avait déjà annoncé jeudi son forfait pour le tournoi de Rotterdam (Pays-Bas), prévu du 1er au 7 mars, pour les mêmes raisons. Il avait perdu en quart de finale de l'Open d'Australie, à Melbourne, en cinq sets face au Grec Stefanos Tsitsipas, après avoir pourtant mené deux sets à zéro. Les organisateurs d'Acapulco, un tournoi ATP 500, ont annoncé à la mi-février qu'ils comptaient aussi sur Tsitsipas (6e joueur mondial), l'Allemand Alexander Zverev (7e) et l'Argentin Diego Schwartzman (9e).",
            'category_id' => 3,
            "author" => "Mouad KHCHICH",
            'image' => "https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(webp):focal(1473x543:1475x541)/origin-imgresizer.eurosport.com/2021/02/25/3001791-61591548-2560-1440.jpg"
        ]);

        DB::table('articles')->insert([
            'title' => "LEBRON JAMES à IBRAHIMOVIC : \"je ne suis pas le gars qu'il faut attaquer\" en matière d'engagements",
            'text' => "Critiqué par la star suédoise du football Zlatan Ibrahimovic sur ses engagements sociaux et politiques, LeBron James s'est défendu samedi, expliquant qu'il n'y avait aucune raison que son impact dans la société ne puisse pas être aussi fort que celui qu'il a sur les terrains de sport. \"Je ne suis pas vraiment le genre de gars qu'il faut venir attaquer (en matière d'engagements), car je fais ce qu'il faut\", a déclaré le quadruple champion NBA après la victoire des Los Angeles Lakers 102-93 contre les Portland Trail Blazers, vendredi soir.",
            'category_id' => 2,
            'image' => "https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(webp):focal(1265x446:1267x444)/origin-imgresizer.eurosport.com/2021/01/13/2970160-60959128-2560-1440.jpg",
            "author" => "Mouad KHCHICH",

        ]);
    }
}
