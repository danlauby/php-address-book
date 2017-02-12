<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/contacts", function() use ($app) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone-number'];
         $new_contact = new Contact($name, $address, $phone_number);
         $new_contact->save();;
         return $app['twig']->render('contacts.html.twig', array('newcontact' => $new_contact));
     });

     $app->post('/delete', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete.html.twig');
     });

    return $app;
?>
