@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2 class="form-heading text-center">Assign Homework</h2>
    <form method="POST" action="/homework">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-3">
                <label for="teacher_id" class="form-label">Teacher</label>
                <select name="teacher_id" class="form-control" id="teacher_id">
                    <option value="1">Teacher 1</option>
                    <option value="2">Teacher 2</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="class_id" class="form-label">Class</label>
                <select name="class_id" class="form-control" id="class_id">
                    <option value="">Select Class</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="title" class="form-label">Homework Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Homework Title">
            </div>
            <div class="col-sm-3">
                <label for="assignment_date" class="form-label">Assignment Date</label>
                <input type="date" name="assignment_date" class="form-control" id="assignment_date">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Homework Description</label>
            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Homework Description"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control" id="due_date">
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Assign Homework</button>
    </form>
    
    <div class="mt-5">
        <input type="text" id="search" class="form-control" placeholder="Search Homework...">
        <div id="searchResults" class="mt-3"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('/classes')
            .then(response => response.json())
            .then(data => {
                let classSelect = document.getElementById('class_id');
                data.forEach(classItem => {
                    let option = document.createElement('option');
                    option.value = classItem.id;
                    option.textContent = classItem.name;
                    classSelect.appendChild(option);
                });
            });

        document.getElementById('search').addEventListener('input', function () {
            let searchValue = this.value.toLowerCase();
            let resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = '';

            fetch(`/homework/search?query=${searchValue}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        resultsContainer.innerHTML = '<p>No results found</p>';
                    } else {
                        data.forEach(homework => {
                            let div = document.createElement('div');
                            div.classList.add('search-result');
                            div.textContent = `${homework.title} - ${homework.due_date}`;
                            resultsContainer.appendChild(div);
                        });
                    }
                });
        });
    });
</script>
@endsection
