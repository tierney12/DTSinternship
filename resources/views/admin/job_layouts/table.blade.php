<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Layout11</th>
        <th>Layout12</th>
        <th>Layout13</th>
        <th>Layout14</th>
        <th>Layout15</th>
        <th>Layout16</th>
        <th>Layout17</th>
        <th>Layout18</th>
        <th>Layout21</th>
        <th>Layout22</th>
        <th>Layout23</th>
        <th>Layout24</th>
        <th>Layout25</th>
        <th>Layout26</th>
        <th>Layout27</th>
        <th>Layout28</th>
        <th>Layout31</th>
        <th>Layout32</th>
        <th>Layout33</th>
        <th>Layout34</th>
        <th>Layout35</th>
        <th>Layout36</th>
        <th>Layout37</th>
        <th>Layout38</th>
        <th>Layout41</th>
        <th>Layout42</th>
        <th>Layout43</th>
        <th>Layout44</th>
        <th>Layout45</th>
        <th>Layout46</th>
        <th>Layout47</th>
        <th>Layout48</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($jobLayouts as $jobLayout)
        <tr class="clickable"
            data-url="{{ route('job-layouts.show', $jobLayout) }}">
            <td>{!! $jobLayout->layout11 !!}</td>
            <td>{!! $jobLayout->layout12 !!}</td>
            <td>{!! $jobLayout->layout13 !!}</td>
            <td>{!! $jobLayout->layout14 !!}</td>
            <td>{!! $jobLayout->layout15 !!}</td>
            <td>{!! $jobLayout->layout16 !!}</td>
            <td>{!! $jobLayout->layout17 !!}</td>
            <td>{!! $jobLayout->layout18 !!}</td>
            <td>{!! $jobLayout->layout21 !!}</td>
            <td>{!! $jobLayout->layout22 !!}</td>
            <td>{!! $jobLayout->layout23 !!}</td>
            <td>{!! $jobLayout->layout24 !!}</td>
            <td>{!! $jobLayout->layout25 !!}</td>
            <td>{!! $jobLayout->layout26 !!}</td>
            <td>{!! $jobLayout->layout27 !!}</td>
            <td>{!! $jobLayout->layout28 !!}</td>
            <td>{!! $jobLayout->layout31 !!}</td>
            <td>{!! $jobLayout->layout32 !!}</td>
            <td>{!! $jobLayout->layout33 !!}</td>
            <td>{!! $jobLayout->layout34 !!}</td>
            <td>{!! $jobLayout->layout35 !!}</td>
            <td>{!! $jobLayout->layout36 !!}</td>
            <td>{!! $jobLayout->layout37 !!}</td>
            <td>{!! $jobLayout->layout38 !!}</td>
            <td>{!! $jobLayout->layout41 !!}</td>
            <td>{!! $jobLayout->layout42 !!}</td>
            <td>{!! $jobLayout->layout43 !!}</td>
            <td>{!! $jobLayout->layout44 !!}</td>
            <td>{!! $jobLayout->layout45 !!}</td>
            <td>{!! $jobLayout->layout46 !!}</td>
            <td>{!! $jobLayout->layout47 !!}</td>
            <td>{!! $jobLayout->layout48 !!}</td>
            {{--<td>{!! $jobLayout->created_by !!}</td>--}}
            {{--<td>{!! $jobLayout->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>