<?php

namespace App\Controller;

use App\Entity\Topic;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class AdminTopicController extends AbstractController
{

  /**
   * @Route("/admin/upload", name="admin_upload")
   */
  public function upload(Request $request)
  {

    $upload_path = $this->getParameter('upload.path');
    /**
     * @var UploadedFile $file
     */
    $file = $request->files->get('upload');
    $filename = md5(time() . rand(1000, 9999)) . '.' . $file->getClientOriginalExtension();

    $file->move($upload_path, $filename);

    return $this->json(['uploaded' => true, 'url' => '/upload/' . $filename]);
  }

  /**
   * @Route("/admin/topic", name="admin_topic")
   */
  public function index()
  {
    return $this->render('admin_topic/index.html.twig', [
      'controller_name' => 'AdminTopicController',
    ]);
  }

  /**
   * @Route("/admin/topic/input", name="admin_topic_input")
   */
  public function input(Request $request, TopicRepository $topicRepository)
  {
    $data = $request->get('item');

    if ($data) {
      var_dump($data);
      $topic = new Topic();
      $topic->setTitle($data['title'])
        ->setContent("test")
        ->setCreated(new \DateTime())
        ->setUpdated(new \DateTime())
        ->setDeleted(0);

      $topicRepository->save($topic);

    }

    return $this->render('admin_topic/input.html.twig');
  }

}
