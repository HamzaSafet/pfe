@extends('layouts.client')

@section('content')
<style>
  .card1 {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="borer:1px solid #e28743">
                <div class="card-header">
                    <strong>Challenge</strong>
                    </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('client.test.store') }}">
                        @csrf
                        @foreach($categories as $category)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <strong> Categorie : </strong>
                                    {{ $category->name }}</div>
                
                                <div class="card-body">
                                    @foreach($category->categoryQuestions as $question)
                                        <div class="card @if(!$loop->last)mb-3 @endif">
                                            <div class="card-header">
                                                <strong>Question : </strong>
                                                {{ $question->question_text }}</div>
                        
                                            <div class="card-body">
                                                <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                                @foreach($question->questionOptions as $option)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
                                                        <label class="form-check-label" for="option-{{ $option->id }}">
                                                            {{ $option->option_text }}
                                                        </label>
                                                    </div>
                                                @endforeach

                                                @if($errors->has("questions.$question->id"))
                                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                        <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <strong>Informations</strong>
                    </div>

                <div class="card-body">
                        
                            <div class="card mb-3">
                                <div class="card-header">Horaire</div>
                
                                <div class="card-body">
                                 
                                    <div style="color: red" id="countdown"></div>
     
                                                
                                                   
                            </div>
                       

                        
                   
                </div>
                <div class="card-body">
                        
                    <div class="card mb-3">
                        <div class="card-header">Utilisateur</div>
        
                        <div class="card-body">
                                
                          <ul class="list-group">
                            
                            <li class="list-group-item"> Score :   <i class="fa-solid fa-star" style="color:yellow"></i>
                                
                                <i class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i class="fa-regular fa-star" style="color:yellow"></i>  </li>
                            <li class="list-group-item"><span class="data"></span> Nom :   {{ auth()->user()->name }}</li>
                            <li class="list-group-item">Creation : 12/05/2023</li>
                            
                          </ul>                
                    </div>
               
                   
                    
                
           
        </div>
            </div>
           
        </div>   
    </div>
</div>


   <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            
            <section style="background-color: #eee;">
                <div class="container py-5">
                  <div class="row">
                    <div class="col">
                      <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="#">User</a></li>
                          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
              
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="">
                        <div class="card-body text-center">
                          <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                          <h5 class="my-3">student</h5>
                          <p class="text-muted mb-1">Cyber Sécurité</p>
                          <p class="text-muted mb-4"></p>
                          
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-8">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Nom</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">student</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-4">
                              <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">student@gmail.com</p>
                            </div>
                          </div>
                          <hr>
                          
                          <div class="row">
                            <div class="col-sm-4">
                              <p class="mb-0 pe-0">Tele</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">06 61 66 78 87</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-4">
                              <p class="mb-0">Adresse</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">CIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </section>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
 
  
 
  
   
  
   
@endsection