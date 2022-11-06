@extends('data')

@section('content')
    <nav class="navbar navbar-inverse" style="background-color:rgb(0, 0, 0);">
      <div class="container"> 
        
        <div class="navbar-header">
          <img src="https://bcp.edu.ph/images/logo50.png" alt="BCP" class="d-inline-block align-middle pt-2 pl-2">&nbsp;
        
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{route('bug')}}">Home</a></li>
          {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">--/--/--</a></li>
              <li><a href="#">--/--/--</a></li>
              <li><a href="#">--/--/--</a></li>
            </ul>
          </li> --}}
          <li><a href="#">Courses</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="modal" data-target="#exampleModalLong"style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp;Register Online</a></li>
          <li><a data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
        </ul> 
      </div>
    </nav>


    <div class="container" style="margin-top: 15vh;">
        <div class="justify-content-center">
            <div class="col-lg-12">
              
                {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button> --}}
              <div class="modal fade" id="modal-default" style="margin-top: 5vh;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        
                      <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" name="email"placeholder="Email" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
          
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" name="password"  placeholder="Password" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @guest
                                      @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="float: right;">
                                            {{ __('I forgot my Password') }}
                                        </a>
                                      @endif  
                                    @endguest
                                </div>      
                                
                            </div>
                          </div>
                         
                        </div>
                        <!-- /.box-body -->
                        
                              {{-- <div class="box-footer">
                            
                              <button type="submit" class="btn btn-primary" style="margin-right: 20px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                                  {{ __('Login') }}
                              </button>
                              
          
                              
                              </div> --}}
                            
                        <!-- /.box-footer -->
                      




                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" style="margin-right: 15px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                        {{ __('Login') }}
                     </button> 
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
              </div>


              
              {{-- <a type="button" href="{{route('login')}}" class="btn btn-primary btn-block" style="margin-top: 20vh;
                color: rgb(249, 247, 247);   padding-top: 20px;
                padding-bottom: 20px;
                font-size: 2rem;
                text-align: center;
                text-decoration: none;
                font-weight: bold;
                font-size: 20px;
                font-family: sans-serif, arial;
                ">Access to Login</a>
                 --}}
                 
                {{-- BPC TERMS --}}
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true" >
                  {{-- <div class="modal fade" id="exampleModalLong"  tabindex="-1" role="dialog"  aria-hidden="true" style="margin-top: 5vh; "> --}}
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">BCP Terms and Conditions</h3>
                      </div>
                      <div class="modal-body" style="text-align: justify; text-justify: inter-word;  overflow-y: scroll; height:750px;">
                        <div style="padding: 20px;">
                          <h4>Statement of Privacy Policy</h4>
                          <hr>
                          <b>BESTLINK COLLEGE OF THE PHILIPPINES, INC .( BCP )</b> is committed to abide by and adhere to the provisions of Philippine Republic Act No. 10173, also known as, the Data Privacy Act of 2012 and its Implementing Rules and Regulations. BCP commits itself to protect the privacy of its data subjects (individuals it deals with, current, past and prospective) as well as to ensure that the personal data gathered as provided by such subjects shall be safeguarded and secured while under its control and custody. This data privacy policy will outline the manner by which the data gathered will be properly utilized and the process of doing so; the measures to be undertaken for purposes of keeping it secure, its appropriate use and disposal when no longer deemed necessary; and provide information to the data subjects about their rights under RA#10173.
                          <br>
                          For the above purpose this Data Privacy Notice and Consent Form may be amended at any time without prior notice, and such amendments will be notified to you via BCP’s website or email.
                          <br><br>
                          <h4>Privacy Notice</h4>
                          <hr>
            
                          <h5>Information Collected</h5>
                          <p>
                            BCP collects, stores, and processes personal data from its current, past and prospective students, starting with the information provided at application through the information collected throughout the whole course of their study at the BCP. This will include: 
                          </p>
                          <ul>
                            <li>Contact information, such as, name, addresses, telephone numbers, email addresses and other contact details;</li>
                            <li>Personal information, such as date and place of birth, nationality, immigration status, religion, civil status, student ID, government-issued IDs, web information, recommendations and assessment forms from previous schools, etc.;</li>
                            <li>Family background, including information on parents, guardians, siblings, etc.;</li>
                            <li>Photographic and biometric data, such as, photos, CCTV videos, fingerprints, handwriting and signature specimens;</li>
                            <li>Student's school works, including data gathered using third party online learning tools Health records, psychological evaluation results, disciplinary records, and physical fitness information;</li>
                            <li>Student Cumulative Guidance Folder, which includes interviews, guidance assessments, special needs, exclusions/behavioral information, etc.;</li>
                            <li>Permanent Student Academic Records, including transcripts and the academic history of the student in BCP;</li>
                            <li>Student extra-curricular activities, résumés, job interview forms; and,</li>
                            <li>Financial and billing information.</li>
                          </ul>
            
                          <h5>Use of Information</h5>
                          <p>				
                          The collected personal data is used solely for the following purposes:         
                          </p>
                          <ul>
                            <li>Processing of admission application and student selection (and to confirm the identity of prospective students and their parents);</li>
                            <li>Verifying authenticity of student records and documents;</li>
                            <li>Processing of scholarship applications and its on-going requirements;</li>
                            <li>Processing of enrollment and registration;</li>
                            <li>Supporting student learning, and validating students’ program of study based on curriculum requirements, and other activities and experiences forming part of the student’s formation and education;</li>
                            <li>Supporting the student’s well-being and providing medical services and guidance counselling;</li>
                            <li>Monitoring and reporting on student progress; processing of evaluations, exam results, and grades;</li>
                            <li>Monitoring and ensuring the safety of all students within the BCP campus;</li>
                            <li>Processing and generating statements of accounts;</li>
                            <li>Processing of application for graduation;</li>
                            <li>Evaluation for board examinations;</li>
                            <li>Documentation of students’ data;</li>
                            <li>For accreditation, professional development of teachers and staff, and research, e.g., evaluation studies by the research desk, action research by teachers, etc.;</li>
                            <li>Posting or displaying of academic and non-academic achievements within the BCP premises and/or its official website and social media accounts;</li>
                            <li>Marketing and promoting BCP, its students, employees, and other academic and non-academic and/or school activities inside and outside the campus; and,</li>
                            <li>Providing Library services, running an outreach program, family council purposes, job postings, practicums, internships, employment.</li>
                          </ul>
            
                          <h5>Information Sharing</h5>
                          <p>							
                          Personal data under the custody of BCP shall be disclosed only to authorized recipients of such data. Otherwise, we will share your personal data with third parties, other than your parents and/or guardian on record for minors, only with your consent, or when required or permitted by our policies and applicable law, such as with:               
                          </p>
                          <ul>	
                            <li>Regulatory authorities, courts, and government agencies, e.g., Department of Education, Commission on Higher Education, etc.;</li>
                            <li>The Association of Christian Schools, Colleges and University Accrediting Agency (ACSCU-AAI), a service organization which accredits academic programs that meet commonly accepted standards of quality education;</li>
                            <li>Service Providers who perform services for us and help us support your learning, monitor and report on your progress, manage the operations of our school, and assess how well BCP is doing; and,</li>
                            <li>Business partners and other academic linkages who provide internships and job opportunities to our graduates.</li>				
                          </ul>
            
                          <h5>Data Transfer</h5>
                          <p>					
                          Where BCP consider it necessary or appropriate, for the purposes of data storage, processing, providing any service or product on our behalf to you, or implementing an academic linkage program, we may transfer your personal data to third parties within or outside of the Philippines, under conditions of confidentiality and similar levels of security safeguards.                
                          </p>
            
                          <h5>Security</h5>
                          <p>			
                            We continue to implement organizational, administrative, technical, and physical security measures to safeguard your personal data. 
                            <br><br>   			     
                            Only authorized personnel have access to them, the exchange of which is facilitated through internal shared servers, email, and paper files.  
                            <br><br>  			              
                            Should third parties need access to your personal data, we require some form of data sharing agreement with them, in compliance with the DPA and the DPA-IRR.    
                            <br><br>  	       			
                            Your paper and digital files are securely stored employing physical security to safeguard the paper files and technical security to protect the digital files.                             
                            </p> 
                            <h5>Retention of Information</h5>
                            <p>				
                            We keep your paper and digital files only for as long as necessary. 
                            <br><br>           
                            a) The Permanent Student Academic Records are kept by the Basic Education (BED) Records Office or the Higher Education (HED) Registrar’s Office for 75 years after last graduation from BCP. 
                            <br>
                            b) The BED and HED Admission files are kept for five years.      
                            <br>			
                            c) Application forms and documents of unsuccessful applicants are kept by the Admissions Office – five years for BED and two years for HED.              
                            <br>			
                            d) Scholarship application forms and supporting documentation are kept by the HED Office of Student Affairs for four years, or until the scholar graduates.             
                            <br>			
                            e) The Student Cumulative Guidance Folders are kept by the Guidance Office for five years after graduation.             
                            <br>			
                            f) Student school works are kept for five years, but, in a some cases, selected student works may be retained for ten years as exemplars.             
                            <br>			
                            g) Student disciplinary records are stored by the Office of Student Affairs, for five years after graduation.             
                            <br>			
                            h) The class records are kept for one year after graduation.             
                            <br> 			
                            i) Non-academic records, e.g., service records for HED scholars, extra-curricular activities, emergency contact forms, etc. are kept for five years.             
                            <br>   
                            j) Financial and billing information are kept by the Finance Office for ten years.             
                            <br>  			   
                            k) The Clinic retains health records for five years after graduation.             
                            <br>     
                            l) CCTV cameras are the responsibility of Facilities; some cameras have memory for a month of CCTV videos, and older ones for less. The cameras run continuously on a rolling basis, where older videos are overwritten as the memory fills up.             
                            <br> 
                            <br> 			
                            When your personal data is no longer needed, we take reasonable steps to securely destroy such information or permanently de-identify it. Paper files are securely shredded and electronic information is deleted applying <i>Secure Erase</i>
                            so that this is no longer recoverable nor reproducible.        
                            <br>          
                          </p>
                          <h5>Your rights</h5>
                          <p>						
                          You have the right to be informed, to object processing, access and rectification, to suspend or to withdraw your personal data, including, any such information held by third parties, with whom BCP has data sharing agreement; and be indemnified in case of damages pursuant to the provisions of the DPA and the DPA-IRR.                        
                          </p>
                        </div>
                      </div>					
                      <div class="modal-footer">				
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>   
                        <a type="button" class="btn btn-primary" href="{{route('control')}}">I AGREE</a>     
                      </div>
                    </div>
                  </div>
                </div>
                {{-- picker --}}

                <div class="modal fade" id="modal-defaults" style="margin-top: 5vh;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Control Panel</h4>
                      </div>
                      
                      <div class="modal-body">

                        <div class="modal-footer">
                          <a href ={{route('register')}} class="btn btn-primary" style="margin-right: 15px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px; margin-bottom:10px;">
                          Register as Super Admin
                         </a> 
                         <a href={{route('student.cre')}} class="btn btn-info" style="margin-right: 15px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                          Register as Student
                          </a> 
                        </div>

                      </div>
                    <!-- /.modal-content -->
                    </div>
                  </div>
                </div>

                 
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@if ($message = Session::get('success'))

    <script>
      swal("Success!","{!!Session::get('success')!!}","success",{button:"OK",});
    </script>

@endif

















{{-- <div class = "row" >
        <div class ="pull-left">
            <label style="font-size: 20px;">
                Student Data
            </label>
         </div>
    
</div>
   
    <div class = "row">
        <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputFile">Import excel file</label>
                <input type="file" id="exampleInputFile" name="file" accept=".xlsx, .xls, .csv">
            </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
        </form>
    </div>  
</div>
    <div class = "pull-left" style="margin-top: 10px;
                                    margin-bottom: 10px;">                              
        
        <a class = "btn btn-success" href="{{ route('student.create') }}">Add New Data</a>
        <a class = "btn btn-danger" href="{{ route('student.getDataPDF') }}">Export as PDF</a>
        <a class = "btn btn-info" href="{{ route('student.getDataEXCEL')}}">Export as Excel</a>
        <a class = "btn btn" href="{{ route('student.getDataCSV')}}" style="color: white;
                                                                            background-color: rgb(86, 206, 246)">Export as CSV</a>
    </div>  

<br>
<br>
@if ($message = Session::get('success'))

    <div class ="alert alert-success">
        <p>{{ $message }}</p>
        
    </div>
    <br>
    <br>
@endif
<table class ="table table-striped row"> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthdate</th>          
        <th>Birthplace</th> 
        <th>Contact</th>
        <th>Email</th>
        <th>Address</th>  
        <th>Action</th>
    </tr>

    @foreach($students as $student)
    <tbody>
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->Fullname}}</td>
          <td>{{$student->Gender}}</td>
          <td>{{$student->Birthdate}}</td>
          <td>{{$student->Birthplace}}</td>
          <td>{{$student->Contact}}</td>
          <td>{{$student->Email}}</td>
          <td>{{$student->Address}}</td>
          <td>
            <form method="POST" action="{{ route('student.destroy',$student->id) }}">
                <a class="btn btn-primary" href="{{ route ('student.edit',$student->id) }}">EDIT</a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <input type = "submit" class = "btn btn-danger delete user" value="Delete">
            </form>
          <td>
        </tr>
      </tbody>
    @endforeach
</table> --}}

@endsection
