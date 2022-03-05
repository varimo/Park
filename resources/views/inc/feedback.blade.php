@section('feedback')
    <!-- Блок обратной свзязи -->
    <div class="feedback text-center">
        <button class="btn" data-toggle="modal" data-target="#exampleModal">
            <img src="/storage/img/значки/arrow.png" alt="">
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" action="{{ route('feedback-form') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="user_name">Введите ваше имя</label>
                            <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Иван">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Введите номер телефона</label>
                            <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                        </div>
                        <div class="form-group">
                            <label for="user_email">Введите email</label>
                            <input type="email" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
                        </div>
                        <div class="form-group">
                            <label for="user_message">Введите сообщение</label>
                            <textarea id="" class="form-control" name="user_message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>