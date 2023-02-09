<?php
 namespace App\Repositories;
 use Illuminate\Database\Eloquent\Model;
 use DB;
 class  UserRepository implements UserInterface
{
	// model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;

    }

    // Get all instances of model
    public function all($id='')
    {
        if(!empty($id)){
        return $this->model->all()->sortByDesc($id);
        }else{
        return $this->model->all();    
        }
    }

    /* public function allWithPagination($id='')
    {
        return $this->model->orderBy('id', 'desc')->paginate(10);
    } */


    /* public function AllWithGroup($id=''){
        
        return $this->model::orderBy($id, 'desc')->get();
    } */

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
  /*  public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    } */

    public function update(array $data,$id)
    {
    
        // $this->model::where('id', $id)->update($data);
        if($this->model::where('id', $id)->update($data)){
            return response()->json(['response'=>true,'message'=>'Update successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
    }

    /* public function updateWithId(array $data,$id,$idname)
    {
        $this->model::where($idname, $id)->update($data);
    }  */ 
    /* public function updateWithWhere(array $data,$where)
    {
        $this->model::where($where)->update($data);
    } */


    /*  public function find($id)
    {
        return $this->model::where('id', $id)->first();
    } */
     /* public function findone(array $data) 
    {
        return $this->model::where($data)->first();
    } */

    // remove record from the database
    public function delete($id)
    {
        if($this->model->destroy($id)){
            return response()->json(['response'=>true,'message'=>'Donation Deleted successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
    }

   /*  public function deleteRecord($id,$idname)
    {
        return $this->model->where($idname,$id)->delete();
    } */


    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    /* public function getModel()
    {
        return $this->model;
    } */

    // Set the associated model
   /*  public function setModel($model)
    {
        $this->model = $model;
        return $this;
    } */

    // Eager load database relationships
    /* public function with($relations)
    {
        return $this->model->with($relations);
    } */

    /* public function where(array $data){
        return $this->model->where($data)->orderBy('id', 'desc')->get();
    } */
    /* public function whereLimit(array $data){
        return $this->model->where($data)->orderBy('id', 'desc')->paginate(10);
    }

    public function Limit(){
        return $this->model->orderBy('id', 'desc')->paginate(10);
    }
    public function wherefirst(array $data){
        return $this->model->where($data)->first();
    }

    public function whereDesc(array $data){
        return $this->model->where($data)->orderBy('created_at', 'asc')->get();
    }

    public function get_first_record($id,$idname){
        return $this->model->where($idname,$id)->orderBy($idname, 'desc')->first();
    }

    public function get_record($id,$idname){
        return $this->model->where($idname,$id)->get();
    }

    public function insert($data){
        return $this->model->insert($data);
    }
     public function pagination(){
        return $this->model->orderBy('id', 'desc')->paginate(20);
    }

    public function userlist(){
        return $this->model->where('role_as','2')->orderBy('id', 'desc')->get();
    }

    public function likecount(array $data){
        return $this->model->where($data)->orderBy('id', 'desc')->count();
    }

    public function unlikelikecount(array $data){
     return $this->model->where($data)->orderBy('id', 'desc')->count();
    }
    public function usercount(){
        return $this->model->where('role_as','2')->orderBy('id', 'desc')->count();
    }

    public function countall(){
        return $this->model->orderBy('id', 'desc')->count();
    }

    public function whererandom(array $data){
        return $this->model->where($data)->inRandomOrder()->get();
    }

     public function insertWithGetLastInsertedId($data){
        $value = $this->model->create($data);
        return $value->id;
    } */

}
?>