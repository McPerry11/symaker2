@extends('_layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/course_content.css') }}">
@endsection

@section('body')
{{-- Use this as a template for your modules, along with the CSS and JS to match style theme. --}}
<div id="header">
    <div class="columns">
        <div class="column is-5-tablet is-4-widescreen">
            <div class="subtitle is-3">Course Content</div>
        </div>
        <div class="column">
            <button id="btn-add-content" class="button is-info btn-modal" modal-id="add-content">
                <span class="icon"><i class="fas fa-plus"></i></span>
                <span>Add Content</span>
            </button>
        </div>
    </div>
</div>

<div class="table-container">
    <table class="table is-fullwidth is-striped">
        <thead>
            <tr>
                <th>Weeks</th>
                <th>Hours</th>
                <th>Learning Outcomes</th>
                <th>Topics</th>
                <th>Teaching Learning Activities</th>
                <th>Assessments</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="row-content">
            <template id="row-template">
                <tr id="content-@{{id}}">
                    <td class="weeks">@{{weeks}}</td>
                    <td class="hours">@{{hours}}</td>
                    <td class="learning_outcomes">@{{learning_outcomes}}</td>
                    <td class="topics">@{{topics}}</td>
                    <td class="activities">@{{activities}}</td>
                    <td class="assessment">@{{assessment}}</td>
                    <td>
                        <button class="button edit-rowcontent btn-modal" modal-id="add-content">
                            <span class="icon">
                                <i class="fas fa-edit"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            </template>
        </tbody>
    </table>
</div>

<!-- modals -->
<div id="add-content" class="modal is-clipped">
    <br><br>
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Add Content</p>
            <button class="delete is-medium btn-cancel btn-modal" modal-id="confirm"></button>
        </header>
        <section class="modal-card-body">
            <div class="content">
                <form id="course-content-form">
                    <div class="field">
                        <label class="label">Weeks</label>
                        <div class="control">
                            <input id="weeks" type="number" class="input" min="1" max="99" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Hours</label>
                        <div class="control">
                            <input id="hours" type="number" class="input" min="1" max="24" required> <!-- max=3? -->
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Learning Outcomes</label>
                        <div class="control">
                            <textarea id="learning_outcomes" class="textarea" placeholder="At the end of the lesson, the learner will be able to:" required></textarea>
                            <!-- TODO: see if there's a default new line at the text area -->
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Topics</label>
                        <div class="control">
                            <textarea id="topics" class="textarea" required></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Teaching Learning Activities</label>
                        <div class="control">
                            <textarea id="activities" class="textarea" required></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Assessment</label>
                        <div class="control">
                            <textarea id="assessment" class="textarea" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <footer class="modal-card-foot">
            <div class="buttons">
                <button class="button is-link btn-submit" modal-id="confirm">Add</button>
                <button class="button is-danger is-outlined btn-cancel btn-modal" modal-id="confirm">Cancel</button>
                <!-- TODO: modal for delete confirmation -->
                <button id="delete-content" class="button is-pulled-right is-danger is-outlined btn-modal" modal-id="confirm">Delete Content</button>
            </div>
        </footer>
    </div>
</div>

<div id="confirm" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <p class="is-size-4 confirmation-text">Cancel adding content?</p>
                </div>
                <div class="buttons">
                    <button class="button is-danger is-outlined cancel">Yes</button>
                    <button class="button">No</button>
                </div>
            </article>
        </div>
    </div>
</div>

<nav class="pagination is-right">
    <a class="pagination-previous">Previous</a>
    <a class="pagination-next">Next</a>
    <form class="pagination-list">
        <div class="field has-addons">
            <div class="control">
                <button class="button is-info">Go to</button>
            </div>
            <div class="control">
                <input type="number" id="page" class="input" placeholder="Page #">
            </div>
            <div class="control">
                <a class="button is-static">/ 69</a>
            </div>
        </div>
    </form>
</nav>
@endsection

@section('scripts')
<script src="{{ asset('js/course_content.js') }}"></script>
<script src="{{ asset('js/ckeditor.js') }}"></script>
<!-- Mustache js templating, used cdn for trial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.0.1/mustache.min.js"></script>
@endsection
