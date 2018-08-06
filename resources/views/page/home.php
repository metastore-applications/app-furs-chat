<?php use MetaStore\App\{Kernel\View, Furs\App}; ?>

<?php View::get( 'header', '_common' ); ?>
<?php View::get( 'navbar', '_common' ); ?>

	<main>

		<!-- section-main -->
		<section id="section-main" class="hero is-fullheight">
			<div class="hero-body">
				<div class="container box">
					<h1 class="title">
						Главная
					</h1>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Сообщения
								</h4>
								<?php View::get( 'list.messages', 'block' ); ?>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Участники
								</h4>
								<?php View::get( 'list.members', 'block' ); ?>
							</article>
						</div>
						<!-- / block -->
					</div>
				</div>
			</div>
		</section>
		<!-- / section-main -->

		<!-- section-info -->
		<section id="section-info" class="hero is-fullheight">
			<div class="hero-body">
				<div class="container box">
					<h1 class="title">
						Информация
					</h1>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-comments"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Интересные обсуждения
										</h4>
										<p>
											Сервер <strong>FURS.Chat</strong> живёт бурной жизнью.
											У нас можно обсудить новости из мира науки, ИТ, индустрии игр, фильмов, книг и многое другое...
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-user-secret"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Ролевые игры
										</h4>
										<p>
											<strong>Ролевые игры</strong> - неотъемлемая часть любого сервера.
											Только у нас имеется ролевая игра под названием <strong>Serenity</strong>,
											которая позволяет полностью погрузиться в мир космических путешествий.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-calendar"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Ивенты
										</h4>
										<p>
											На нашем сервере постоянно проводятся различные мероприятия:
											радио-эфиры, интересные передачи, совместные просмотры мультфильмов и фильмов.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-gamepad"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Стримы
										</h4>
										<p>
											На нашем канале <a href="https://furs.stream/"><strong>FURS.Stream</strong></a> проводится потоковое вещание
											<strong>радио-передач</strong> и <strong>Let's Play</strong>-ев.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-book"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Интеграция с ресурсами FURS
										</h4>
										<p>
											Наш сервер интегрирован с библиотекой
											<a href="https://library.furs.wiki/"><strong>FURS / LIBRARY</strong></a>,
											а также остальными ресурсами сети <strong>FURS</strong>.
											Все изменения автоматически публикуются в специальном канале
											<strong>FURS.Chat</strong>'а,
											поэтому Вы не пропустите ни одного события.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-images"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Архив изображений
										</h4>
										<p>
											На нашем сервере имеется большая галерея изображений, которая постоянно пополняется новыми элементами.
											Присутствуют закрытые специализированные каналы с NU- и YIFF-содержанием.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-cogs"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Новые технологии и возможности
										</h4>
										<p>
											Сервер
											<strong>FURS.Chat</strong> постоянно обновляется и внедряет новые возможности.
											Мы первыми реализовали категории для каналов и первыми интегрировали потоки радио-вещания с серверов Discord на внешние источники.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="media">
								<figure class="media-left">
									<p class="image is-64x64">
										<span class="fas fa-heart"></span>
									</p>
								</figure>
								<div class="media-content">
									<div class="content">
										<h4>
											Добрая администрация
										</h4>
										<p>
											Администрация
											<strong>FURS.Chat</strong> всегда готова выслушать Вас и открыта для принятия новых идей и пожеланий.
										</p>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
				</div>
			</div>
		</section>
		<!-- / section-info -->

		<!-- section-connect -->
		<section id="section-connect" class="hero is-fullheight">
			<div class="hero-body">
				<div class="container box">
					<h1 class="title">
						Подключение
					</h1>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Присоединиться
								</h4>
								<p>
									Для присоединения к чату необходимо:
								</p>
								<ol>
									<li>
										Нажать кнопку <code>Присоединиться</code>.
									</li>
									<li>
										Выбрать себе имя.
									</li>
									<li>
										Получать удовольствие от общения.
									</li>
								</ol>
								<p>
									<a class="button is-success" href="https://discord.gg/YPJvhZy" target="_blank">Присоединиться</a>
								</p>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Поделиться чатом
								</h4>
								<p>
									Отправьте ссылку друзьям и знакомым, чтобы они тоже участвовали в дискуссии!
								</p>
								<div class="field has-addons">
									<div class="control">
										<input id="chatUrl" class="input" type="text" value="https://discord.gg/YPJvhZy" readonly="readonly" />
									</div>
									<div class="control">
										<button class="button is-info setClipboard" data-clipboard-target="#chatUrl" title="Скопировать ссылку в буфер обмена">
										<span class="icon is-small">
											<span class="fas fa-clipboard fa-fw"></span>
										</span>
										</button>
									</div>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Правила сервера
								</h4>
								<ol>
									<li>
										Запрещена систематическая агрессия.
									</li>
									<li>
										Запрещен спам, флуд - отправка большого количества однотипных сообщений.
									</li>
									<li>
										Запрещена продажа чего-либо без уведомления администрации.
									</li>
									<li>
										Запрещена навязчивая реклама.
									</li>
								</ol>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Социальные сети
								</h4>
								<div class="field is-grouped">
									<p class="control">
										<a title="ВКонтакте" class="button is-dark" href="https://vk.com/furs.life">
											<span class="icon"><span class="fab fa-vk fa-fw"></span></span>
										</a>
									</p>
									<p class="control">
										<a title="Facebook" class="button is-dark" href="https://www.facebook.com/furs.life">
											<span class="icon"><span class="fab fa-facebook-f fa-fw"></span></span>
										</a>
									</p>
									<p class="control">
										<a title="Twitter" class="button is-dark" href="https://twitter.com/fursnetwork">
											<span class="icon"><span class="fab fa-twitter fa-fw"></span></span>
										</a>
									</p>
								</div>
							</article>
						</div>
						<!-- / block -->
					</div>
				</div>
			</div>
		</section>
		<!-- / section-connect -->

		<!-- section-stats -->
		<section id="section-stats" class="hero is-fullheight">
			<div class="hero-body">
				<div class="container box">
					<h1 class="title">
						Статистика
					</h1>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Каналы
								</h4>
								<p>
									Сервер
									<strong>FURS.Chat</strong> отличается от других серверов продуманной системой каналов для общения.
								</p>
								<ul>
									<li>
										Более <span class="tag is-link">10</span> тематических каналов для общения.
									</li>
									<li>
										Более <span class="tag is-link">3</span> каналов для RP-тематики.
									</li>
									<li>
										Более
										<span class="tag is-link">6</span> каналов для общения при помощи голосовой связи.
									</li>
								</ul>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Участники
								</h4>
								<p>
									Администраторам удаётся поддерживать дружную "ламповую" атмосферу для общения.
									Наш сервер быстро развивается и всегда рад новым участникам!
								</p>
								<?php View::get( 'stats.members.count', 'block' ); ?>
							</article>
						</div>
						<!-- / block -->
					</div>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Специализации
								</h4>
								<?php View::get( 'stats.profs', 'block' ); ?>
							</article>
							<article class="content">
								<h4>
									Цветовая дифференциация штанов
								</h4>
								<?php View::get( 'stats.clr', 'block' ); ?>
							</article>
						</div>
						<!-- / block -->
						<!-- block -->
						<div class="column">
							<article class="content">
								<h4>
									Виды ФУРРИ
								</h4>
								<?php View::get( 'stats.roles', 'block' ); ?>
							</article>
						</div>
						<!-- / block -->
					</div>
				</div>
			</div>
		</section>
		<!-- / section-stats -->

		<!-- section-ranking -->
		<section id="section-ranking" class="hero is-fullheight">
			<div class="hero-body">
				<div class="container box">
					<h1 class="title">
						Рейтинг участников (TOP-50)
					</h1>
					<div class="columns">
						<!-- block -->
						<div class="column">
							<?php View::get( 'list.ranking', 'block' ); ?>
						</div>
						<!-- / block -->
					</div>
				</div>
			</div>
		</section>
		<!-- / section-ranking -->

	</main>

<?php View::get( 'footer', '_common' ); ?>