<form method="post", action="{{route('Createquizz')}}">
    @csrf
    <label for="question">question</label><br>
    <input type="text" id="question" name="question"><br>

    <label for="answera">answera name:</label><br>
    <input type="text" id="answera" name="answera"><br>

    <label for="answerb">answerb name:</label><br>
    <input type="text" id="answerb" name="answerb"><br>

    <label for="answerc">answerc name:</label><br>
    <input type="text" id="answerc" name="answerc"><br>

    <label for="answerd">answerd name:</label><br>
    <input type="text" id="answerd" name="answerd"><br>

    <label for="answerd">Corrected name:</label><br>
    <input type="text" id="answerd" name="correct"><br>

    <button type="submit">შენახვა</button>
</form>
