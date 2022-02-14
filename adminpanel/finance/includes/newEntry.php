 <form action="" method="post">
     <td>system</td>
     <td><select class="mb-2 form-control" name="Academic_level" id="Academic_level" required>
             <option value="0">Select level</option>
             <option value="Artsan">Artsan</option>
             <option value="Certificate">Certificate</option>
             <option value="Diploma">Diploma</option>
         </select></td>
     <td><input id="ammount" class="form-control" type="number" name="ammount" required></td>
     <td><?php echo date('Y-m-d', strtotime(date_default_timezone_get())); ?></td>
     <td><a type="submit" class="btn btn-sm btn-primary">Update</a></td>
 </form>