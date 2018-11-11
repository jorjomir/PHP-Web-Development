<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 11:38 AM
 */

namespace Http;


use Core\DataBinding;
use Core\Template;
use DTO\BookDTO;
use DTO\EditDTO;
use DTO\GenreDTO;
use Repository\GenreRepository;
use Service\BookService;
use Service\GenreService;
use Service\UserService;

class BookHttp extends HttpAbstract
{
    /**
     * @var Template
     */
    private $template;
    /**
     * @var BookService
     */
    private $book_service;
    /**
     * @var DataBinding
     */
    private $data_binder;
    /**
     * @var UserService
     */
    private $user_service;

    /**
     * BookHttp constructor.
     * @param Template $template
     * @param BookService $book_service
     * @param DataBinding $data_binder
     * @param UserService $user_service
     */
    public function __construct(Template $template, BookService $book_service, DataBinding $data_binder, UserService $user_service)
    {
        $this->template = $template;
        $this->book_service = $book_service;
        $this->data_binder = $data_binder;
        $this->user_service = $user_service;
    }

    public function add(array $data, GenreService $genre_service) {
        /** @var BookDTO $book */
        $book = $this->data_binder->bind($data, BookDTO::class);
        $editDTO=new EditDTO();
        $editDTO->setBook($book);
        $editDTO->setGenres($genre_service->getAll());
        if(isset($data['save'])) {
            $author = $this->user_service->get_current();
            /** @var GenreDTO $genre */
            $genre = $genre_service->getOne(intval($data['genre_id']));
            $now=new \DateTime();
            $book->setAddedOn($now->getTimestamp());
            $book->setGenre($genre);
            $book->setUser($author);
            //$book->setUsername($name);
            try {
                $this->book_service->add($book);
                $this->redirect("profile.php");
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            $this->template->render('book/create', $editDTO);
        }
    }

    public function myBooks()
    {
        $user=$this->user_service->get_current();

        if(!$user) {
            $this->redirect('login.php');
        }
        $data= $this->book_service->getMyBooks($user->getUserId());
        $this->template->render('book/myBooks', $data);
    }

    public function allBooks()
    {
        $user=$this->user_service->get_current();

        if(!$user) {
            $this->redirect('login.php');
        }
        $data= $this->book_service->getAll();
        $this->template->render('book/allBooks', $data);
    }

    public function delete(array $data)
    {
        if(!isset($data['book_id'])) {
            throw new \Exception('No Book ID');
        }
        $this->book_service->delete($data['book_id']);
        $this->redirect('myBooks.php');
    }

    public function details(array $data)
    {
        if(!isset($data['book_id'])) {
            throw new \Exception('No Book ID');
        }
        /** @var BookDTO $book */
        $book=$this->book_service->getOne(intval($data['book_id']));
        $this->template->render('book/details', $book);
    }

    public function edit(BookService $bookService, UserService $userService, GenreService $genreService,
                            array $formData=[], array $getData=[])
    {
        $book = $bookService->getOne(intval($getData['id']));

        $editDTO = new EditDTO();
        $editDTO->setBook($book);
        $editDTO->setGenres($genreService->getAll());

        if(isset($formData['save'])){
            $this->handleEditProcess($bookService, $userService, $genreService, $formData, $getData);
        }else{
            $this->render("book/edit", $editDTO);
        }
    }

    private function handleEditProcess($taskService, $userService, $categoryService, $formData, $getData)
    {
        try {
            /** @var BookDTO $task */
            $task = $this->data_binder->bind($formData, BookDTO::class);
            /** @var UserService $userService */
            $author = $userService->get_current();
            /** @var GenreService $categoryService */
            /** @var GenreService $categoryService */
            $category = $categoryService->getOne(intval($formData['category_id']));
            $task->setAuthor($author);
            $task->setGenre($category);
            $task->setBookId($getData['id']);

            /** @var BookService $taskService */
            $taskService->edit($task, intval($getData['id']));
            $this->redirect("myBooks.php");
        }catch (\Exception $ex){

        }
    }


}