<x-main>
    <div class="container mt-5 ">
        <div class="row g-5">
            <div class="col-md-12 library">
                <div class="pb-5 ">
                    <h1 class="text-black">
                        {{$book->title}}
                    </h1>
                    <div>
                        <ul>
                            <li>
                                <p class="text-black">Anno libro:{{$book->year ?? 'ignoto'}}</p>
                            </li>
                            <li>
                                <p class="text-black">Autore:{{ $book->author->firstname }}</p>
                                <p class="text-black">Autore:{{ $book->author->lastname}}</p>
                            </li>
                        </ul>
                               

                            
                       
                         
                    </div>
                </div>
    
            </div>
    
        </div>
    
     </div>







</x-main>