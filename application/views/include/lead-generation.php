<div class="bg-white p-0 rounded shadow">
    <div class="row py-4 px-5 fz-1">
        <span class="mr-0 ml-auto pt-1 pr-4">Period</span>
        <select class="form-control fz-1 w-25 " name="dropdown">
            <option>Yesterday</option>
            <option>Default selected</option>
            <option>Default select</option>
        </select>
    </div>

    <table class="table fz-1">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="border-0 w-30 pl-4">Title of Upload File</th>
                <th scope="col" class="border-0 text-center">Type</th>
                <th scope="col" class="border-0 text-center">Click</th>
                <th scope="col" class="border-0 text-center">Lead</th>
                <th scope="col" class="border-0 text-center">Posted Date</th>
                <th scope="col" class="border-0">Download Lead</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($post as $lg) { ?>
            
            <tr>
                <!-- <th scope="row">1</th> -->
                <td scope="row" class="pl-4">
                    <a href=""><?php echo $lg->title; ?></a>
                </td>
                <td class="text-center">eBook</td>
                <td class="text-center">10</td>
                <td class="text-center">0.01</td>
                <td class="text-center"><?php echo date('d F Y', strtotime($lg->created_at));  ?></td>
                <td><a href="">Download</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="w-100 text-center py-5">
        <button class="btn btn-outline-primary btn-rounded fz-1 px-4">
            View More
        </button>
    </div>
</div>