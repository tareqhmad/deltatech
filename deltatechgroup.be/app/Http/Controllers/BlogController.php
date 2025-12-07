<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'Notre Mission : Révolutionner la Livraison en Belgique',
                'slug' => 'notre-mission-revolutionner-la-livraison',
                'excerpt' => 'Découvrez comment nous transformons le secteur de la livraison avec des solutions innovantes et un service client exceptionnel.',
                'content' => '<p>Depuis notre création en 2015, nous avons pour mission de simplifier et d\'optimiser les livraisons pour les particuliers et les entreprises en Belgique. Notre approche combine technologie de pointe et expertise logistique pour offrir un service fiable et économique.</p>
                <p>Nous croyons en une livraison responsable, efficace et transparente. C\'est pourquoi nous avons développé des algorithmes de calcul de prix précis qui tiennent compte de nombreux paramètres pour vous offrir le meilleur tarif possible.</p>
                <p>Notre équipe de plus de 50 professionnels travaille quotidiennement à améliorer nos services et à élargir notre zone de couverture, aujourd\'hui présente dans toutes les grandes villes belges.</p>',
                'image' => 'mission.jpg',
                'date' => '15 mars 2024',
                'category' => 'entreprise',
                'author' => 'Jean Dupont',
                'author_role' => 'PDG & Fondateur'
            ],
            [
                'id' => 2,
                'title' => 'Les 5 Avantages de Choisir Notre Service de Livraison',
                'slug' => 'avantages-service-livraison',
                'excerpt' => 'Découvrez pourquoi des centaines d\'entreprises nous font confiance pour leurs livraisons quotidiennes.',
                'content' => '<h3>1. Transparence des Prix</h3>
                <p>Notre calculateur de prix vous montre exactement combien vous paierez. Pas de frais cachés, pas de surprises. Vous savez à l\'avance le coût total de votre livraison.</p>
                
                <h3>2. Flexibilité des Créneaux</h3>
                <p>Nous proposons des créneaux de livraison adaptés à vos besoins, y compris les livraisons express en moins de 2 heures dans les centres urbains.</p>
                
                <h3>3. Suivi en Temps Réel</h3>
                <p>Notre application mobile vous permet de suivre votre livraison minute par minute, avec notifications et photos de confirmation.</p>
                
                <h3>4. Équipements Modernes</h3>
                <p>Notre flotte de camionnettes est régulièrement renouvelée et équipée des dernières technologies pour garantir la sécurité de vos colis.</p>
                
                <h3>5. Assurance Complète</h3>
                <p>Tous vos colis sont assurés jusqu\'à 5 000€ sans frais supplémentaires. Votre tranquillité d\'esprit est notre priorité.</p>',
                'image' => 'avantages.jpg',
                'date' => '10 mars 2024',
                'category' => 'avantages',
                'author' => 'Marie Lambert',
                'author_role' => 'Responsable Qualité'
            ],
            [
                'id' => 3,
                'title' => 'Comment Nous Calculons Nos Tarifs de Manière Équitable',
                'slug' => 'calcul-tarifs-equitables',
                'excerpt' => 'Notre algorithme intelligent prend en compte plusieurs facteurs pour déterminer un prix juste et compétitif.',
                'content' => '<p>Contrairement à nos concurrents qui appliquent des tarifs fixes, nous avons développé un système de calcul dynamique qui prend en compte :</p>
                
                <ul>
                <li><strong>La distance réelle</strong> : Calculée via des APIs cartographiques précises</li>
                <li><strong>Le type de véhicule</strong> : Adapté à vos besoins (petite ou grande camionnette)</li>
                <li><strong>Le volume des colis</strong> : Un système d\'unités pour une estimation précise</li>
                <li><strong>La densité du trafic</strong> : Prise en compte des heures de pointe</li>
                <li><strong>Les frais fixes</strong> : Carburant, maintenance, assurance</li>
                </ul>
                
                <p>Notre formule tarifaire est conçue pour être équitable :</p>
                <p><strong>Pour les petits trajets</strong> : Nous maintenons un prix accessible tout en garantissant la rentabilité de nos livreurs.</p>
                <p><strong>Pour les longs trajets</strong> : Nous appliquons une réduction progressive pour encourager les livraisons à distance.</p>
                
                <p>Découvrez notre calculateur pour obtenir une estimation personnalisée en quelques clics !</p>',
                'image' => 'tarification.jpg',
                'date' => '5 mars 2024',
                'category' => 'tarification',
                'author' => 'Thomas Moreau',
                'author_role' => 'Responsable Logistique'
            ],
            [
                'id' => 4,
                'title' => 'Notre Engagement Écologique : Des Livraisons Plus Vertes',
                'slug' => 'engagement-ecologique-livraisons-vertes',
                'excerpt' => 'Nous nous engageons à réduire notre impact environnemental grâce à des initiatives concrètes.',
                'content' => '<p>Dans un monde où la logistique représente une part importante des émissions de CO2, nous avons décidé d\'agir concrètement pour réduire notre empreinte écologique.</p>
                
                <h3>Nos Actions</h3>
                
                <p><strong>Optimisation des Trajets</strong> : Grâce à notre algorithme intelligent, nous regroupons les livraisons et optimisons les itinéraires pour réduire les kilomètres parcourus jusqu\'à 30%.</p>
                
                <p><strong>Flotte Éco-responsable</strong> : 20% de nos camionnettes sont déjà électriques, et nous visons 50% d\'ici 2025. Tous nos véhicules respectent les normes Euro 6.</p>
                
                <p><strong>Emballages Durables</strong> : Nous proposons à nos clients des emballages réutilisables et recyclables, et recyclons systématiquement nos propres emballages.</p>
                
                <p><strong>Compensation Carbone</strong> : Pour chaque livraison, nous finançons des projets de reforestation en Belgique via notre partenariat avec "Forest for Belgium".</p>
                
                <p><strong>Formation des Chauffeurs</strong> : Nos livreurs suivent une formation à l\'éco-conduite qui permet de réduire la consommation de carburant jusqu\'à 15%.</p>
                
                <p>Choisir notre service, c\'est aussi faire un choix responsable pour la planète.</p>',
                'image' => 'ecologie.jpg',
                'date' => '28 février 2024',
                'category' => 'durabilité',
                'author' => 'Sophie Martin',
                'author_role' => 'Responsable RSE'
            ],
            [
                'id' => 5,
                'title' => 'Témoignages : Ce Que Disent Nos Clients',
                'slug' => 'temoignages-clients',
                'excerpt' => 'Découvrez les retours d\'expérience de nos clients satisfaits à travers la Belgique.',
                'content' => '<p>Notre meilleure publicité reste la satisfaction de nos clients. Voici quelques témoignages recueillis ces derniers mois :</p>
                
                <div class="testimonial">
                <h4>« Service exceptionnel pour notre e-commerce »</h4>
                <p><em>"En tant que boutique en ligne de meubles, nous avions besoin d\'un service de livraison fiable et flexible. Depuis que nous travaillons avec eux, nos retours clients sur la livraison sont excellents. Le calculateur de prix nous permet de proposer des frais de port exacts à nos clients."</em></p>
                <p><strong>Marc Dubois</strong>, fondateur de Maison & Meubles (Bruxelles)</p>
                </div>
                
                <div class="testimonial">
                <h4>« Un partenaire de confiance pour nos livraisons urgentes »</h4>
                <p><em>"Nous sommes une entreprise pharmaceutique et avons souvent besoin de livrer des produits médicaux urgents. Leur service express nous a sauvé plusieurs fois. Le suivi en temps réel est parfait."</em></p>
                <p><strong>Dr. Isabelle Laurent</strong>, directrice de PharmaBel (Liège)</p>
                </div>
                
                <div class="testimonial">
                <h4>« Des prix transparents et compétitifs »</h4>
                <p><em>"J\'utilise régulièrement leur service pour mes envois personnels. Comparé aux autres transporteurs, leur calculateur est très précis et leurs prix sont toujours inférieurs de 10 à 15%. Je recommande !"</em></p>
                <p><strong>Pauline Leroy</strong>, particulière (Anvers)</p>
                </div>
                
                <div class="testimonial">
                <h4>« Un service client au top »</h4>
                <p><em>"Quand nous avons eu un problème avec une livraison (colis endommagé), leur service client a réglé le problème en moins de 24h avec une compensation immédiate. Professionnalisme exemplaire."</em></p>
                <p><strong>Robert Van Damme</strong>, gérant de Tech Solutions (Gand)</p>
                </div>
                
                <p>Ces témoignages nous motivent chaque jour à continuer d\'améliorer nos services.</p>',
                'image' => 'temoignages.jpg',
                'date' => '20 février 2024',
                'category' => 'témoignages',
                'author' => 'L\'équipe communication',
                'author_role' => 'Service Clients'
            ],
            [
                'id' => 6,
                'title' => 'Notre Calculateur : Un Outil Innovant pour Vos Livraisons',
                'slug' => 'calculateur-outil-innovant',
                'excerpt' => 'Découvrez notre calculateur de prix intelligent qui révolutionne la manière d\'estimer vos frais de livraison.',
                'content' => '<p>Nous sommes fiers d\'avoir développé l\'un des calculateurs de livraison les plus précis du marché. Voici ce qui le rend unique :</p>
                
                <h3>Comment Fonctionne Notre Calculateur ?</h3>
                
                <p>Notre système utilise des technologies avancées pour vous offrir une estimation précise :</p>
                
                <ol>
                <li><strong>Géolocalisation Intelligente</strong> : Nous utilisons l\'API OpenRouteService pour calculer la distance exacte entre les deux adresses, en tenant compte des routes et du trafic.</li>
                
                <li><strong>Analyse des Colis</strong> : Notre système convertit vos colis en unités de volume pour déterminer la camionnette optimale.</li>
                
                <li><strong>Calcul Dynamique</strong> : Notre algorithme applique une tarification adaptée : dégressive pour les longues distances, et tenant compte des frais fixes pour les courtes distances.</li>
                
                <li><strong>Facteurs Multiples</strong> : Nous prenons en compte le type de véhicule, le volume total, la distance, et même l\'heure de la journée.</li>
                </ol>
                
                <h3>Pourquoi Utiliser Notre Calculateur ?</h3>
                
                <p><strong>Gain de Temps</strong> : Obtenez un prix en moins de 30 secondes</p>
                <p><strong>Transparence</strong> : Vous voyez exactement comment le prix est calculé</p>
                <p><strong>Fiabilité</strong> : Le prix affiché est garanti, sans surprise</p>
                <p><strong>Flexibilité</strong> : Testez différentes options (type de camionnette, nombre de colis)</p>
                
                <p><a href="/calcul-livraison" class="btn-calculator">Essayez notre calculateur gratuitement →</a></p>
                
                <h3>Un Outil Pour Tous</h3>
                
                <p>Que vous soyez un particulier qui déménage, une boutique en ligne, ou une entreprise avec des besoins logistiques réguliers, notre calculateur s\'adapte à vos besoins.</p>
                
                <p>Nous continuons d\'améliorer cet outil en fonction de vos retours. N\'hésitez pas à nous faire part de vos suggestions !</p>',
                'image' => 'calculateur.jpg',
                'date' => '15 février 2024',
                'category' => 'outils',
                'author' => 'David Tech',
                'author_role' => 'Responsable Innovation'
            ]
        ];

        return view('blog.index', compact('articles'));
    }

    public function show($slug)
    {
        $articles = [
            'notre-mission-revolutionner-la-livraison' => [
                'id' => 1,
                'title' => 'Notre Mission : Révolutionner la Livraison en Belgique',
                'content' => '<p>Depuis notre création en 2015, nous avons pour mission de simplifier et d\'optimiser les livraisons pour les particuliers et les entreprises en Belgique.</p>',
                'date' => '15 mars 2024',
                'author' => 'Jean Dupont'
            ],
            // Ajoutez les autres articles ici
        ];

        if (!isset($articles[$slug])) {
            abort(404);
        }

        $article = $articles[$slug];
        $recentArticles = array_slice($articles, 0, 3);

        return view('blog.show', compact('article', 'recentArticles'));
    }
}
