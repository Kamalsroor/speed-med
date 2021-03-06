<table class="table table-bordered" id="table-add-transition" data-url-account-types="{{ route('get_account_types') }}"
data-row-standard='
    <tr>
        <td>
            {!! Form::hidden('id[]', 0) !!}
            {!! Form::select('Prodact_name[]', $Mobilat, null, ['class' => ' form-control select2 '   ]) !!}


        </td>
        <td>
            {!! Form::text('Total[]', null, ['class' => 'amount form-control', 'placeholder' => 'الكميه']) !!}
            <div class="show-error-amount invalid-feedback"></div>
      </td>
      <td>
          {!! Form::textarea('sirarnamber[]', null, ['class' => ' form-control', 'placeholder' => 'السريال']) !!}
          <div class="show-error-amount invalid-feedback"></div>
      </td>


        <td class="text-center">
            <button type="button" class="btn btn-danger remove-row" data-id="0"><i class="fa fa-close"></i></button>
        </td>
    </tr>'>
            <!-- Description -->
            <div class="form-group">
                {{$PrometerRequestsDetails[0]->PrometerRequests->Customersed->name}}
                {!! Form::label('اسم العميل', 'اسم العميل') !!}
                @can('prmoter')
                {!! Form::hidden('CustomerNames', $PrometerRequestsDetails[0]->PrometerRequests->CustomerNames, ['class' => 'sub_account custom_select  form-control' ]) !!}
                @endcan
                @can('admin' )
                {!! Form::select('CustomerNames', $Customers, $PrometerRequestsDetails[0]->PrometerRequests->CustomerNames, ['class' => 'sub_account custom_select select2 form-control' ]) !!}
                @endcan
            </div>
            <div class="form-group">
                {!! Form::label('رقم الاذن', 'رقم الاذن ') !!}
                {!! Form::text('premission_id',  null, ['class' => 'form-control', 'id' => 'CustomerNames', 'placeholder' => 'رقم الاذن']) !!}
            </div>





    <!--./ Description -->
    <thead>
        <tr>
          <th>اسم الصنف</th>
          <th>السريال</th>
          <th>حذف</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($PrometerRequestsDetails as $details)
            <tr>
                <td>
                    {!! Form::hidden('id[]', $details->id) !!}
                    {{$details->Mobilat->name}}
                @can('prmoter')
                    {!! Form::hidden('Prodact_name[]', $details->Prodact_name, ['class' => ' form-control custom_select '   ]) !!}
                @endcan
                @can('admin' )
                    {!! Form::select('Prodact_name[]', $Mobilat, $details->Prodact_name, ['class' => ' form-control custom_select '   ]) !!}
                @endcan
                </td>
                
                <td>
                  {!! Form::text('Total[]', $details->qualityacc, ['class' => 'amount form-control', 'placeholder' => 'Transition Amount']) !!}
                </td>
                <td>
                    {!! Form::textarea('sirarnamber[]', null, ['class' => ' form-control', 'placeholder' => 'السريال']) !!}
                    <div class="show-error-amount invalid-feedback"></div>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-danger remove-row" data-id="{{ $details->id }}"><i class="fa fa-close"></i></button>
                </td>
                
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                <button type="button" class="btn btn-info btn-lg add-row"><i class="fa fa-plus"></i></button>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>اسم الصنف</th>
          <th>السريال</th>
          <th>حذف</th>  
        </tr>
    </tfoot>
</table>

<br>
<br>
<div class="form-group">
        {!! Form::label('ملاحظات', 'ملاحظات ') !!}
        {!! Form::textarea('note', null, ['class' => ' form-control', 'placeholder' => 'ملاحظات']) !!}
</div>