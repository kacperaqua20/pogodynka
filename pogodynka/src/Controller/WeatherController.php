<?php

namespace App\Controller;

use App\Entity\Location; 
use App\Repository\ForecastRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//class WeatherController extends AbstractController
//{
  // #[Route('/weather/{id}', name: 'pogodynka', requirements: ['id' => '\d+'])]
    
  //  public function city(Location $location, ForecastRepository $repository): Response
   // {
   // $forecasts = $repository->findByLocation($location);
    
    //return $this->render('weather/city.html.twig', [
      //  'location' => $location,
 //       'forecasts' => $forecasts,
   // ]);
 //   }

//}

class WeatherController extends AbstractController
{
#[Route('/weather/{country}/{city}', name: 'pogodynka', requirements: ['id' => '\d+'])]
public function city(
    #[MapEntity(mapping: ['city' => 'city'])]
    Location $location,
    ForecastRepository $repository,
): Response
{
    $forecasts = $repository->findByLocation($location);

    return $this->render('weather/city.html.twig', [
        'location' => $location,
        'forecasts' => $forecasts,
    ]);
}
}