<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>		
	</head>
	<body>
		<style>
			@media only screen and (max-width: 600px) {
				.inner-body {
					width: 100% !important;
				}

				.footer {
					width: 100% !important;
				}
			}

			@media only screen and (max-width: 500px) {
				.button {
					width: 100% !important;
				}
			}
		</style>

		<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
			<tr>
				<td align="center">
					<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
						{{ $header ?? '' }}

						<!-- Email Body -->
						<tr>
							<td class="body" width="100%" cellpadding="0" cellspacing="0">
								<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
									<!-- Body content -->
									<tr>
										<td class="content-cell">
											{{ Illuminate\Mail\Markdown::parse($slot) }}

											{{ $subcopy ?? '' }}
										</td>
									</tr>
								</table>
							</td>
						</tr>

						{{ $footer ?? '' }}
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
