@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
   }

</style>
<div class="card uper">
  <div class="card-header">
    Marksheet
 
 
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
 
            
  </div>
  <div class="card-body">
     <div class="row">
 
        <div class="col-xs-12 col-sm-12 col-md-12">
 
            <div class="form-group">
 
                <strong>Name of Student:</strong>
 
                {{ $post->name}}
 
            </div>
 
        </div>
       
 
        <div class="col-xs-12 col-sm-12 col-md-12">
 
            <div class="form-group">
 
                <strong>Address:</strong>
 
                {{ $post->address }}
 
            </div>
 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
 
 <div class="form-group">

     <strong>Symbol No. :</strong>

     {{ $post->symb }}

 </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">
 
 <div class="form-group">

     <strong>School Name:</strong>

     {{ $post->sname }}

 </div>

</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
 
 <div class="form-group">

     <strong>Date of birth:</strong>

     {{ $post->dob }}

 </div>

</div>

 
    </div>
    
  
<table border="2,dotted">
  <tr>
  <th width="70px">S.N</th>
  <th width="200px">Subjects</th>
  <th width="100px">Credit hour</th>
  <th width="200px">Obtained Mark</th>
 <th width="100px">Final Grade</th>
  <th width="100px">Grade Point<th>
  <th width="100px">Remarks</th>
</tr>
<tr>
  <td>01</td>
  <td>English</td>
  <td>4</td>
  <td>{{$post->eng}}</td>
  <td>
   @if($post->eng >=90)
      A+
      @elseif($post->eng>=80)
        A
        @elseif($post->eng>=70)
        B+
        @elseif($post->eng>=60)
        B
        @elseif($post->eng>=50)
        C+
        @elseif($post->eng>=50)
        C
        @elseif($post->eng>=40)
        D+
        @else
        D
      @endif
  </td>
  <td>
  @if($post->eng >=90)
      4.0
      @elseif($post->eng>=80)
        3.6
        @elseif($post->eng>=70)
        3.2
        @elseif($post->eng>=60)
        2.8
        @elseif($post->eng>=50)
        2.4
        @elseif($post->eng>=50)
        2.0
        @elseif($post->eng>=40)
        1.6
        @else
        1.2
      @endif

  </td>
 
</tr>
<tr>
  <td>02</td>
  <td>Nepali</td>
  <td>4</td>
  <td>{{$post->nep}}</td>
  <td>
  @if($post->nep >=90)
      A+
      @elseif($post->nep>=80)
        A
        @elseif($post->nep>=70)
        B+
        @elseif($post->nep>=60)
        B
        @elseif($post->nep>=50)
        C+
        @elseif($post->nep>=50)
        C
        @elseif($post->nep>=40)
        D+
        @else
        D
      @endif
</td>

<td>
  @if($post->nep >=90)
      4.0
      @elseif($post->nep>=80)
        3.6
        @elseif($post->nep>=70)
        3.2
        @elseif($post->nep>=60)
        2.8
        @elseif($post->nep>=50)
        2.4
        @elseif($post->nep>=50)
        2.0
        @elseif($post->nep>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <td>03</td>
  <td>Physics</td>
  <td>4</td>
  <td>{{$post->phy}}</td>
  <td>
  @if($post->phy >=90)
      A+
      @elseif($post->phy>=80)
        A
        @elseif($post->phy>=70)
        B+
        @elseif($post->phy>=60)
        B
        @elseif($post->phy>=50)
        C+
        @elseif($post->phy>=50)
        C
        @elseif($post->phy>=40)
        D+
        @else
        D
      @endif
</td>

<td>
  @if($post->phy >=90)
      4.0
      @elseif($post->phy>=80)
        3.6
        @elseif($post->phy>=70)
        3.2
        @elseif($post->phy>=60)
        2.8
        @elseif($post->phy>=50)
        2.4
        @elseif($post->phy>=50)
        2.0
        @elseif($post->phy>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <td>04</td>
  <td>Chemistry</td>
  <td>4</td>
  <td>{{$post->chem}}</td>
  <td>
  @if($post->chem >=90)
      A+
      @elseif($post->chem>=80)
        A
        @elseif($post->chem>=70)
        B+
        @elseif($post->chem>=60)
        B
        @elseif($post->chem>=50)
        C+
        @elseif($post->chem>=50)
        C
        @elseif($post->chem>=40)
        D+
        @else
        D
      @endif
</td>
<td>
  @if($post->chem >=90)
      4.0
      @elseif($post->chem>=80)
        3.6
        @elseif($post->chem>=70)
        3.2
        @elseif($post->chem>=60)
        2.8
        @elseif($post->chem>=50)
        2.4
        @elseif($post->chem>=50)
        2.0
        @elseif($post->chem>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <td>05</td>
  <td>Networking</td>
  <td>4</td>
  <td>{{$post->net}}</td>
  <td>
  @if($post->net >=90)
      A+
      @elseif($post->net>=80)
        A
        @elseif($post->net>=70)
        B+
        @elseif($post->net>=60)
        B
        @elseif($post->net>=50)
        C+
        @elseif($post->net>=50)
        C
        @elseif($post->net>=40)
        D+
        @else
        D
      @endif
</td>

<td>
  @if($post->net >=90)
      4.0
      @elseif($post->net>=80)
        3.6
        @elseif($post->net>=70)
        3.2
        @elseif($post->net>=60)
        2.8
        @elseif($post->net>=50)
        2.4
        @elseif($post->net>=50)
        2.0
        @elseif($post->net>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <td>06</td>
  <td>Mathematics</td>
  <td>4</td>
  <td>{{$post->math}}</td>
  <td>
  @if($post->math >=90)
      A+
      @elseif($post->math>=80)
        A
        @elseif($post->math>=70)
        B+
        @elseif($post->math>=60)
        B
        @elseif($post->math>=50)
        C+
        @elseif($post->math>=50)
        C
        @elseif($post->math>=40)
        D+
        @else
        D
        @endif
</td>
<td>
  @if($post->math >=90)
      4.0
      @elseif($post->math>=80)
        3.6
        @elseif($post->math>=70)
        3.2
        @elseif($post->math>=60)
        2.8
        @elseif($post->math>=50)
        2.4
        @elseif($post->math>=50)
        2.0
        @elseif($post->math>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <td>07</td>
  <td>Programing</td>
  <td>4</td>
  <td>{{$post->pro}}</td>
  <td>
  @if($post->pro >=90)
      A+
      @elseif($post->pro>=80)
        A
        @elseif($post->pro>=70)
        B+
        @elseif($post->pro>=60)
        B
        @elseif($post->pro>=50)
        C+
        @elseif($post->pro>=50)
        C
        @elseif($post->pro>=40)
        D+
        @else
        D
      @endif
</td>

<td>
  @if($post->pro >=90)
      4.0
      @elseif($post->pro>=80)
        3.6
        @elseif($post->pro>=70)
        3.2
        @elseif($post->pro>=60)
        2.8
        @elseif($post->pro>=50)
        2.4
        @elseif($post->pro>=50)
        2.0
        @elseif($post->pro>=40)
        1.6
        @else
        1.2
      @endif

  </td>
</tr>
<tr>
  <th colspan='5'>Percentage(%)</th>
  <td>
     @php
      $per=($post->eng+$post->nep+$post->phy+$post->chem+$post->net+$post->math+$post->pro)/700*100;
      echo number_format((float)$per,0,'.');
    @endphp
    </td>
</tr>
 <tr>
   <th colspan="5">Grade Point Average(GPA):</th>
   <td>
     @php
      $gpa=($post->eng+$post->nep+$post->phy+$post->chem+$post->net+$post->math+$post->pro)/700*100/25;
      echo number_format((float)$gpa,1,'.');
    @endphp
    </td>
</tr>
<tr>
  <th colspan="5">Result</th>
  <td>
  @php
  $per=($post->eng+$post->nep+$post->phy+$post->chem+$post->net+$post->math+$post->pro)/700*100;
     
    if($per >=40)
    {
    echo " PASS";
}
    else{
    echo "FAIL";
    }
    
    @endphp
</td>
</tr>

</table>

</div>
@endsection