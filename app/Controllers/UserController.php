<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Books;
use App\Models\Author;
use App\Models\Student;
use App\Models\Student_search;
use App\Models\Book_search;
use App\Models\Store_issue;
class UserController extends BaseController
{
    public function index()
    {
        $issue = new Store_issue();
        $issuedata['issueCount'] = $issue->countRows();

        $author = new Author();
        $authordata['authorCount'] = $author->countRows();

        $student = new Student();
        $studentdata['studentCount'] = $student->countRows();

        $books = new Books();
        $bookdata['bookCount'] = $books->countRows();
            $data['pageTitle']='Home';

            $mergedData = array_merge($bookdata, $studentdata,$authordata,$issuedata, $data);
        return view('dashboard/home',$mergedData);
    }
    //**********category crud start**********
    //view all cat
    public function category(){
        $category = new Category();
        $data['category'] = $category->orderBy('cat_id', 'DESC')->findAll();
        $data['pageTitle'] = 'Category';
        return view('dashboard/category', $data);
    }

    //update cat
    public function edit_category($id){
        $category = new Category();
        $data['category']=$category->find($id);
        $data['pageTitle']='edit category';
        return view('dashboard/edit_category',$data);
    }
    public function update_category($id){
        $category = new Category();
        $data=[
            'cat_name'=> $this -> request -> getPost('cat_name'),
            'status'=> $this -> request -> getPost('status'),
            'updation_date'=> $this -> request -> getPost('updation_date'),
        ];

        $category ->update($id,$data);
        return redirect()->to('user/category')->with('status','Category Added!');
       
    }

    //delete cat
    public function delete_category($id){
        $category = new Category();
       $category -> delete($id);
        return redirect()->to('user/category')->with('status','Category Added!');
       
    }

    //insert cat
    public function add_category(){
        $data['pageTitle']='Add category';
          return view('dashboard/add_category',$data);
    }
    public function cat_store(){
        $category = new Category();
        $data=[
            'cat_name'=> $this -> request -> getPost('cat_name'),
            'status'=> $this -> request -> getPost('status'),
        ];

        $category ->save($data);
        return redirect()->to('user/category')->with('status','Category Added!');

    }

    //category crud end


    //***************books crud start**********
    public function add_books(){
        $data['pageTitle']='add books';
        $categoryModel = new Category();
        $data['category'] = $categoryModel->findAll();
        $authorModel = new Author();
        $data['author'] = $authorModel->findAll();
        return view('dashboard/add_books',$data);
    }
    public function books(){
        $books = new Books();
        $data['books'] = $books->orderBy('books_id', 'DESC')->findAll();
        $data['pageTitle']='Books';
        return view('dashboard/books',$data);
    }

    //insert books
    public function store_books(){
         $books = new Books();
        $file=$this->request->getFile('img');
        if($file->isValid()&& !$file->hasMoved()){
         $imgName=$file->getRandomName();
         $file->move('uploads/',$imgName);
        }

        $data=[
            'book_name'=> $this -> request -> getPost('book_name'),
            'category'=> $this -> request -> getPost('category'),
            'author'=> $this -> request -> getPost('author'),
            'ISBN'=> $this -> request -> getPost('ISBN'),
            'price'=> $this -> request -> getPost('price'),
            'img'=> $imgName,
        ];

        $data['pageTitle']='Books';
        $books ->save($data);
        return redirect()->to('user/books')->with('status','Category Added!');
    }

    public function delete_books($id){
        $books = new Books();
       $books -> delete($id);
        return redirect()->to('user/books')->with('status','Category Added!');
       
    }

    //books crud end



    //*********author crud start******** 
    public function authors(){
        $author = new Author();
        $data['author'] = $author->orderBy('author_id', 'DESC')->findAll();
        $data['pageTitle']='Authors';
        return view('dashboard/authors',$data);
    }
    public function add_author(){
        $data['pageTitle']='add author';
        return view('dashboard/add_author',$data);
    }
    public function store_author(){
        $author = new Author();
        $data=[
            'author_name'=> $this -> request -> getPost('author_name'),
           
        ];

        $author ->save($data);
        return redirect()->to('user/authors')->with('status','Category Added!');

    }
    public function delete_author($id){
        $author = new Author();
       $author -> delete($id);
        return redirect()->to('user/authors')->with('status','Category Added!');
       
    }
    //author crud end


    //*************student crud start******* */
    public function students(){
        $students = new Student();
        $data['students'] = $students->orderBy('student_id ', 'DESC')->findAll();
        $data['pageTitle']='Students';
        return view('dashboard/students',$data);
    }
    public function add_student(){
        $data['pageTitle']='Add student';
        return view('dashboard/add_student',$data);
    }
    public function store_student(){
        $students = new Student();
        $data=[
            'SID'=> $this -> request -> getPost('SID'),
            'student_name'=> $this -> request -> getPost('student_name'),
            'email'=> $this -> request -> getPost('email'),
            'mobile'=> $this -> request -> getPost('mobile'),
            'password'=> $this -> request -> getPost('password'),
            'status'=> $this -> request -> getPost('status'),
           
        ];

        $students ->save($data);
        return redirect()->to('user/students')->with('status','Category Added!');

    }

    public function activate($id){

        $students = new Student();
        $data['students']=$students->find($id);
        $data=[
            'status'=> $this -> request -> getPost('block_status'),
        ];
        $students ->update($id,$data);
        return redirect()->to('user/students')->with('status','Category Added!');
    }
       
    public function deactivate($id){
        $students = new Student();
        $data['students']=$students->find($id);
        $data = [
            'status'=> $this -> request -> getPost('active_status'),
        ];
        $students ->update($id,$data);
        return redirect()->to('user/students')->with('status','Category Added!');
    }
    
    public function student_details($id){
        $data['pageTitle']='Student Details';
        $studentModel = new Student();
        $issueModel = new Store_issue();
        $data['tableData'] = $issueModel
            ->join('students', 'issue.student_name = students.student_name')
            ->select('issue.issue_id, issue.student_name, issue.book_name,issue.issue_date, issue.return_date, issue.fine')
            ->where('students.student_id', $id)
            ->get()
            ->getResult();

        return view('dashboard/studentDetails', $data);
    }


    //student crud end
    public function store_issue(){
        $data['pageTitle']='store issue';
          return view('dashboard/store_issue',$data);
    }
    public function issue_insert(){
        $category = new Store_issue();
        $data=[
            'student_name'=> $this -> request -> getPost('student_name'),
            'book_name'=> $this -> request -> getPost('book_name'),
            'ISBN'=> $this -> request -> getPost('ISBN'),
            

        ];

        $category ->save($data);
        return redirect()->to('user/issueDetails')->with('status','Category Added!');

    }

    public function issueDetails(){
        $store = new Store_issue();
        $data['pageTitle']='IssueDetails';
        $data['store'] = $store->orderBy('issue_id', 'DESC')->findAll();
        return view('dashboard/issueDetails',$data);
    }
    public function issue_new_book(){
        
        $data['pageTitle']='issue new book';
        return view('dashboard/issue_new_book',$data);
    }

    public function s_search(){
        $data['pageTitle']='edit_issue';
        $model = new Student_search();
        $model1 = new Book_search();
        // $issue = new Store_issue();
        // $data['issue'] = $issue->orderBy('issue_id', 'DESC')->findAll();

        $ISBN = $this->request->getPost('ISBN');
        $SID = $this->request->getPost('SID');
        
        $data = $model->getdata($SID);
        $data1 = $model1->getdata($ISBN);
        return view('dashboard/store_issue',['data'=>$data,'data1'=>$data1]);
      }

      public function edit_issue($id){
        $issue = new Store_issue();
        $data['issue']=$issue->find($id);
        $data['pageTitle']='edit_issue';
        return view('dashboard/edit_issue',$data);
    }
    public function update_issue($id){
        $issue = new Store_issue();
        $data=[
           
            'fine'=> $this -> request -> getPost('fine'),
        ];

        $issue ->update($id,$data);
        return redirect()->to('user/issueDetails')->with('status','Category Added!');
       
    }


    /**************Dashboard*********/

    public function dashboard()
    {
      

        // $model = new YourModel(); // Replace with your actual model
        // $data['rowCount'] = $model->countRows(); // Create a method in your model to count rows

        // Load your dashboard view with data
        return view('dashboard/home', $data);
    }

   
}