<?php
/*****
 * CONVERT WEBP
 * by Krylan
 *
 * ver 1.0
 * 
 * Small PHP script to create copies of JPG/PNG files in WebP format. 
 * Make your website lighter and more performant.
 *****/
 
/*** CONFIGURATION ***/
// EXECUTION TIME LIMIT
set_time_limit(30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebP Converter 1.0</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Krylan">
	
	<link rel="shortcut icon" href="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhLS0gQ3JlYXRlZCB3aXRoIElua3NjYXBlIChodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy8pIC0tPgoKPHN2ZwogICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiCiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIKICAgeG1sbnM6c3ZnPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgogICB4bWxuczpzb2RpcG9kaT0iaHR0cDovL3NvZGlwb2RpLnNvdXJjZWZvcmdlLm5ldC9EVEQvc29kaXBvZGktMC5kdGQiCiAgIHhtbG5zOmlua3NjYXBlPSJodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy9uYW1lc3BhY2VzL2lua3NjYXBlIgogICB3aWR0aD0iMy45NzI1Njk5bW0iCiAgIGhlaWdodD0iMy45NzI3OTFtbSIKICAgdmlld0JveD0iMCAwIDMuOTcyNTY5OSAzLjk3Mjc5MSIKICAgdmVyc2lvbj0iMS4xIgogICBpZD0ic3ZnNDAyNiIKICAgaW5rc2NhcGU6dmVyc2lvbj0iMC45Mi4xIHIxNTM3MSIKICAgc29kaXBvZGk6ZG9jbmFtZT0id2VicC1jb252ZXJ0LnN2ZyI+CiAgPGRlZnMKICAgICBpZD0iZGVmczQwMjAiIC8+CiAgPHNvZGlwb2RpOm5hbWVkdmlldwogICAgIGlkPSJiYXNlIgogICAgIHBhZ2Vjb2xvcj0iI2ZmZmZmZiIKICAgICBib3JkZXJjb2xvcj0iIzY2NjY2NiIKICAgICBib3JkZXJvcGFjaXR5PSIxLjAiCiAgICAgaW5rc2NhcGU6cGFnZW9wYWNpdHk9IjAuMCIKICAgICBpbmtzY2FwZTpwYWdlc2hhZG93PSIyIgogICAgIGlua3NjYXBlOnpvb209IjUuNiIKICAgICBpbmtzY2FwZTpjeD0iLTYuNzc0MTI0NiIKICAgICBpbmtzY2FwZTpjeT0iLTE3LjIwMDcyNiIKICAgICBpbmtzY2FwZTpkb2N1bWVudC11bml0cz0ibW0iCiAgICAgaW5rc2NhcGU6Y3VycmVudC1sYXllcj0ibGF5ZXIxIgogICAgIHNob3dncmlkPSJmYWxzZSIKICAgICBmaXQtbWFyZ2luLXRvcD0iMCIKICAgICBmaXQtbWFyZ2luLWxlZnQ9IjAiCiAgICAgZml0LW1hcmdpbi1yaWdodD0iMCIKICAgICBmaXQtbWFyZ2luLWJvdHRvbT0iMCIKICAgICBpbmtzY2FwZTp3aW5kb3ctd2lkdGg9IjE5MjAiCiAgICAgaW5rc2NhcGU6d2luZG93LWhlaWdodD0iMTAxNyIKICAgICBpbmtzY2FwZTp3aW5kb3cteD0iLTgiCiAgICAgaW5rc2NhcGU6d2luZG93LXk9Ii04IgogICAgIGlua3NjYXBlOndpbmRvdy1tYXhpbWl6ZWQ9IjEiIC8+CiAgPG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhNDAyMyI+CiAgICA8cmRmOlJERj4KICAgICAgPGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPgogICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PgogICAgICAgIDxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4KICAgICAgICA8ZGM6dGl0bGU+PC9kYzp0aXRsZT4KICAgICAgPC9jYzpXb3JrPgogICAgPC9yZGY6UkRGPgogIDwvbWV0YWRhdGE+CiAgPGcKICAgICBpbmtzY2FwZTpsYWJlbD0iTGF5ZXIgMSIKICAgICBpbmtzY2FwZTpncm91cG1vZGU9ImxheWVyIgogICAgIGlkPSJsYXllcjEiCiAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEzLjY1Mjk5LC0xMi4yODc0MTMpIj4KICAgIDxwYXRoCiAgICAgICBpbmtzY2FwZTpjb25uZWN0b3ItY3VydmF0dXJlPSIwIgogICAgICAgaWQ9InBhdGgzODc4LTIiCiAgICAgICBzdHlsZT0ib3BhY2l0eToxO3ZlY3Rvci1lZmZlY3Q6bm9uZTtmaWxsOiM0Mjk5NDI7ZmlsbC1vcGFjaXR5OjE7ZmlsbC1ydWxlOm5vbnplcm87c3Ryb2tlOm5vbmU7c3Ryb2tlLXdpZHRoOjAuMjMxNjcxNTE7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjQ7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1kYXNob2Zmc2V0OjE4Ljg5NzYzODMyO3N0cm9rZS1vcGFjaXR5OjE7cGFpbnQtb3JkZXI6bm9ybWFsIgogICAgICAgZD0ibSAtMjExLjc2ODU3LDE0LjE0MzU0IC0wLjY3NTQyLDAuNTI0NTE1IGEgMC45MDg4NDA2NSwxLjA1ODMzMzMgMCAwIDAgMC43OTEyNCwwLjUzODQ2OSAwLjkwODg0MDY1LDEuMDU4MzMzMyAwIDAgMCAwLjc4OTAzLC0wLjUzNjkxOCBsIC0wLjY3NzY0LC0wLjUyNjA2NiB6IG0gMC4xMDM4LC0wLjg5MTE0NiBjIC0wLjU3ODU3LDAuMDAxOCAtMS4wNTAwMywwLjQ3NDE2MiAtMS4wNDg4MiwxLjA1MjczNCAwLjAwMSwwLjU3ODU3MiAwLjQ3NDE2LDEuMDQ5NDMyIDEuMDUyNzMsMS4wNDg4MjggMC41NDUxMiwtNS44MmUtNCAwLjk2MzQ3LC0wLjQzMjQ5MSAxLjAxMzY3LC0wLjk2NDg0NCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4wMzUyLC0wLjA4NTk0IDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMCwtMC4wMDM5IDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMDM1MiwtMC4wODU5NCAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjAwMiwtMC4wMDIgYyAtMC4wNTM2LC0wLjUzMDgzNCAtMC40NzEzOCwtMC45NjA2ODcgLTEuMDE1NTcsLTAuOTU4OTg0IHogbSAwLDAuMjUgYyAwLjQ0MzU2LC0wLjAwMTQgMC44MDA4OSwwLjM1NTI3NyAwLjgwMjc0LDAuNzk4ODI4IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLDAuMDAyIGMgMCwwLjQ0MzU1NSAtMC4zNTUyOCwwLjgwMDMxOCAtMC43OTg4MywwLjgwMDc4MSAtMC40NDM1Niw0LjYzZS00IC0wLjgwMTgxLC0wLjM1NTI3NCAtMC44MDI3MywtMC43OTg4MjggLTkuM2UtNCwtMC40NDM1NTQgMC4zNTUyNywtMC44MDEzNDcgMC43OTg4MiwtMC44MDI3MzQgeiBtIC0wLjQwNjI1LC0xLjIxNDg0NCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTEzMjgsMC4xMjUgdiAwLjM3NSBjIC0wLjA1NzMsMC4wMjAxOSAtMC4xMTMzMywwLjA0MzY2IC0wLjE2Nzk3LDAuMDcwMzEgbCAtMC4yNjM2NywtMC4yNjM2NzEgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjE3NTc4LDAgbCAtMC41NjA1NSwwLjU2MjUgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIDAsMC4xNzc3MzQgbCAwLjI2MzY4LDAuMjYxNzE5IGMgLTAuMDIzOCwwLjA0OTkzIC0wLjA0NiwwLjEwMDE5NyAtMC4wNjQ0LDAuMTUyMzQzIGggLTAuMzc1IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAtMC4xMjUsMC4xMjUgdiAwLjc5Mjk2OSBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4xMjUsMC4xMjUgaCAwLjM3MzA0IGMgMC4wMjAxLDAuMDU5MjcgMC4wNDMzLDAuMTE3MzUyIDAuMDcwMywwLjE3MzgyOCBsIC0wLjI2NTYyLDAuMjY1NjI1IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjAwMiwwLjE3NzczNSBsIDAuNTYyNSwwLjU1ODU5MyBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4xNzU3OCwwIGwgMC4yNjE3MiwtMC4yNjM2NzEgYyAwLjAxODgsMC4wMDg5IDAuMDM3NSwwLjAxOTE5IDAuMDU2NiwwLjAyNzM0IDAuMDMzMSwwLjAxMzk2IDAuMDY3NiwwLjAyMzUgMC4xMDE1NiwwLjAzNTE2IHYgMC4zNjkxNCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4xMjUsMC4xMjUgaCAwLjc5NDkyIGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjEyNSwtMC4xMjUgdiAtMC4zNjMyODEgYyAwLjAxNjgsLTAuMDA1OSAwLjAzNDIsLTAuMDExMSAwLjA1MDgsLTAuMDE3NTggaCAtMC4wMDQgYyAwLjAxMTEsLTAuMDA0IDAuMDIyMiwtMC4wMDc1IDAuMDMzMiwtMC4wMTE3MiBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4wMDIsLTAuMDAyIGMgMC4wMjg5LC0wLjAxMTk1IDAuMDU3OCwtMC4wMjU0MyAwLjA4NTksLTAuMDM5MDYgbCAwLjI2MTcyLDAuMjYxNzE5IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjE3NTc4LDAgbCAwLjU2MDU1LC0wLjU2MjQ5OCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMCwtMC4xNzc3MzUgbCAtMC4yNjc1OCwtMC4yNjU2MjUgYyAwLjAyNDcsLTAuMDUyMzYgMC4wNDc2LC0wLjEwNTQwMiAwLjA2NjQsLTAuMTYwMTU2IGggMC4zNzUgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIDAuMTI1LC0wLjEyNSB2IC0wLjc5Mjk2MyBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTI1LC0wLjEyNSBoIC0wLjM3NSBjIC0wLjAxODksLTAuMDUzMjEgLTAuMDQsLTAuMTA1MzU5IC0wLjA2NDQsLTAuMTU2MjUgbCAwLjI2MzY3LC0wLjI2NzU3OCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMCwtMC4xNzU3ODIgbCAtMC41NjI1LC0wLjU2MDU0NiBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTc1NzgsMCBsIC0wLjI1NzgxLDAuMjU3ODEyIGMgLTAuMDIxNSwtMC4wMTA1NSAtMC4wNDI0LC0wLjAyMTY5IC0wLjA2NDQsLTAuMDMxMjUgbCAtMC4wMDIsLTAuMDAxOSBjIC0wLjAwNSwtMC4wMDIxIC0wLjAwOSwtMC4wMDM4IC0wLjAxMzcsLTAuMDA1OSBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMDA0LDAgYyAtMC4wMjU5LC0wLjAxMDcgLTAuMDUxNywtMC4wMTk5OSAtMC4wNzgxLC0wLjAyOTMgViAxMi40MTI1NSBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTI1LC0wLjEyNSBoIC0wLjc5NDkyIGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAtMC4wMTE3LDAgeiBtIDAuMTM2NzIsMC4yNSBoIDAuNTQ0OTIgdiAwLjMzMzk4NCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4wODQsMC4xMTkxNDEgYyAwLjAwNiwwLjAwMjIgMC4wMTMxLDAuMDAzNiAwLjAxOTUsMC4wMDU5IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjAwNCwwLjAwMiBjIDAuMDA1LDAuMDAxNyAwLjAxMDMsMC4wMDQxIDAuMDE1NiwwLjAwNTkgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIDAuMDAyLDAgYyAwLjAzNjUsMC4wMTE1MiAwLjA3MjEsMC4wMjQ0NSAwLjEwNzQzLDAuMDM5MDYgMC4wMDQsMC4wMDE3IDAuMDA4LDAuMDAyMiAwLjAxMTcsMC4wMDM5IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjAwMiwwLjAwMTkgYyAwLjA0NDEsMC4wMTkwNyAwLjA4NzEsMC4wNDA3MyAwLjEyODksMC4wNjQ0NSBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4xNTAzOSwtMC4wMjE0OCBsIDAuMjMyMzUsLTAuMjMyNDIxIDAuMzg2NzIsMC4zODI4MTIgLTAuMjM2MzMsMC4yMzYzMjggYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjAxOTUsMC4xNTAzOTEgYyAwLjA1MDQsMC4wODk4OCAwLjA4ODgsMC4xODQxNDEgMC4xMTcxOSwwLjI4MzIwMyBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4xMjEwOSwwLjA5MTggaCAwLjMzMjAzIHYgMC41NDI5NjkgaCAtMC4zMzM5OCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTE5MTUsMC4wOTE4IGMgLTAuMDI3NywwLjEwMDgwNyAtMC4wNjg3LDAuMTk5NDUzIC0wLjExOTE0LDAuMjkxMDE2IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjAyMTUsMC4xNDg0MzcgbCAwLjIzNjM0LDAuMjM0Mzc1IC0wLjM4MjgyLDAuMzg0NzY1IC0wLjIzODI4LC0wLjIzNjMyOCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTQ2NDgsLTAuMDIxNDggYyAtMC4wMDUsMC4wMDI3IC0wLjAxMDQsMC4wMDUyIC0wLjAxNTYsMC4wMDc4IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAtMC4wMDIsMC4wMDIgYyAtMC4wMTQ3LDAuMDA3OCAtMC4wMywwLjAxNDIgLTAuMDQ0OSwwLjAyMTQ4IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLDAuMDAyIGMgLTAuMDI3MywwLjAxMzU0IC0wLjA1NTgsMC4wMjU0NyAtMC4wODQsMC4wMzcxMSAtMC4wMDgsMC4wMDMgLTAuMDE1NSwwLjAwNjkgLTAuMDIzNCwwLjAwOTggYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjAwNCwwIGMgLTAuMDMyMiwwLjAxMjYzIC0wLjA2NDUsMC4wMjUwOCAtMC4wOTc3LDAuMDM1MTYgLTAuMDAzLDcuNjdlLTQgLTAuMDA1LDAuMDAxMiAtMC4wMDgsMC4wMDIgaCAtMC4wMDIgYyAtMTBlLTQsMy4xN2UtNCAtMC4wMDIsMC4wMDE2IC0wLjAwNCwwLjAwMiBoIC0wLjAwMiBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMDA2LDAuMDAyIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMDg5OCwwLjExOTE0MSB2IDAuMzMwMDgzIGggLTAuNTQ0NzcgdiAtMC4zMzIwNzIgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjA5MTgsLTAuMTIxMDk0IGMgLTAuMDU1NywtMC4wMTUzMyAtMC4xMDg5MSwtMC4wMzQyMiAtMC4xNjIxMSwtMC4wNTY2NCAtMC4wMzcxLC0wLjAxNTgxIC0wLjA3MzgsLTAuMDMxNjYgLTAuMTA5MzcsLTAuMDUwNzggLTAuMDA0LC0wLjAwMTkgLTAuMDA2LC0wLjAwMzkgLTAuMDEsLTAuMDA1OSBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgLTAuMTUwMzksMC4wMjE0OCBsIC0wLjIzNDM0LDAuMjM2MzI5IC0wLjM4NjcyLC0wLjM4MjgxMiAwLjIzNDM4LC0wLjIzNjMyOCBhIDAuMTI1MDEyNSwwLjEyNTAxMjUgMCAwIDAgMC4wMjE1LC0wLjE0ODQzOCBjIC0wLjA1MjQsLTAuMDk0MzggLTAuMDkyOSwtMC4xOTQ1OTkgLTAuMTIxMDksLTAuMjk4ODI4IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAtMC4xMjExLC0wLjA5Mzc1IGggLTAuMzMyMDMgdiAtMC41NDI5NjkgaCAwLjMzMjAzIGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjEyMTEsLTAuMDkxOCBjIDAuMDI4LC0wLjA5OCAwLjA2NzYsLTAuMTkyMTg0IDAuMTE3MTgsLTAuMjgxMjUgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIC0wLjAyMTUsLTAuMTQ4NDM3IGwgLTAuMjMyNDIsLTAuMjMyNDIyIDAuMzgyODEsLTAuMzg0NzY1IDAuMjM0MzgsMC4yMzI0MjEgYSAwLjEyNTAxMjUsMC4xMjUwMTI1IDAgMCAwIDAuMTUwMzksMC4wMTk1MyBjIDAuMDkyOCwtMC4wNTI1OSAwLjE5MjI1LC0wLjA5NDA2IDAuMjk0OTIsLTAuMTIzMDQ2IGEgMC4xMjUwMTI1LDAuMTI1MDEyNSAwIDAgMCAwLjA4OTgsLTAuMTE5MTQxIHoiIC8+CiAgPC9nPgo8L3N2Zz4K" />
	
	<style>
	*{margin:0 auto}body{font-family:monospace}header{background-color:#549e2e;padding:25px;color:#fff}main{padding:25px}form{text-align:center;left:0;right:0;margin:50px;display:table}div.t{display:table-cell;width:100%}footer{text-align:center;margin:25px 10px}.url_input{padding:10px;box-sizing:border-box;font-size:18px;width:100%;border:2px solid #2f6116}.url_submit{border:none;background-color:#2f6116;color:#fff;font-size:18px;padding:12px;box-sizing:border-box}.error_message{background-color:#fed7d7;color:#c53030;padding:25px;border-radius:5px}.info_message{background-color:#cdf;color:#2f6116;padding:25px;border-radius:5px;margin-top:25px;word-wrap:break-word}.report_section{font-family:monospace;padding:15px 25px;border-bottom:1px solid #ddd}.report_section .report_title{border-radius:4px;padding:2px 5px;font-size:10px;font-weight:700;margin-right:10px}.report_section ul{padding:0}.report_section ul li{padding:5px 0;list-style:none}.info .report_title{border:1px solid #ddd;background-color:#eee}.advice .report_title{border:1px solid #cdf;background-color:#bce}.error .report_title{border:1px solid #fcd;background-color:#ebc}.passed .report_title{border:1px solid #cfd;background-color:#bec}.h1 .report_title,.h2 .report_title{background-color:#9ae6b4}.h3 .report_title,.h4 .report_title,.h5 .report_title{background-color:#c6f6d5}small{color:#aaa}.report_box{display:grid;grid-template-columns:1fr 1fr;grid-column-gap:25px}.report_box>div{width:100%;margin-top:50px}.warning_tooltip{font-size:16px;position:relative;display:inline-flex;justify-content:center}.warning_tooltip:hover{cursor:pointer;color:#2f6116}@media (pointer:coarse){[title]{position:relative}[title]::after{content:attr(title);position:absolute;top:90%;color:#000;background-color:#fff;border:1px solid;width:max-content;padding:3px;font-size:12px;max-width:250px;display:none}[title]:hover::after{display:block}}@media only screen and (max-width:900px){.url_submit{width:100%}form{margin:50px 0;display:block}div.t{display:block;width:100%}.report_box{grid-template-columns:1fr;grid-column-gap:0}}ul{padding:0}li{list-style:none;padding:2px 10px;font-family:monospace}.label{border-radius:4px;padding:2px 5px;font-size:10px}.label.opening{border:1px solid #888;background-color:#999}.label.done{border:1px solid #bdc;background-color:#ced}.label.omitted{border:1px solid #ddd;background-color:#eee}.label.error{border:1px solid #dcb;background-color:#edc}.in_progress{position:fixed;top:0;left:0;right:0;padding:5px;background-color:#eee;border-bottom:1px solid #ddd;font-family:monospace;cursor:pointer}label{margin:15px 25px 15px 0}input[type=checkbox]{display:none}checkbox:before{content:"";border:2px solid #fff;width:16px;height:16px;border-radius:3px;display:inline-block;vertical-align:middle;font-size:16px;line-height:17px}input[disabled]+checkbox:before{content:"";background-color:#555}input[type=checkbox]:checked+checkbox:before{content:"\2713";color:#fff;background-color:#2f6116;border-color:#2f6116;text-align:center}pre code{background-color:#eee;border:1px solid #999;display:block;padding:10px;overflow-x:auto}p{margin-top:20px;margin-bottom:15px}.help{width:50%;display:inline-block}@media screen and (max-width:1200px){.help{width:100%}}
	</style>
	
	<script>
	let scrolling = false;
	function automatic_scroll(){
		if(scrolling === false){
			scrolling = setInterval(function(){ window.scrollTo(0,document.body.scrollHeight); }, 100);
		}
	}
	window.addEventListener('wheel', function(e){clearInterval(scrolling);scrolling = false;} );
	automatic_scroll();
	</script>
</head>
<body onload="document.querySelector('.in_progress').style.display = 'none';window.scrollTo(0,document.body.scrollHeight);clearInterval(scrolling);">

<?php
$overwrite = false;
if(isset($_POST['overwrite'])){
	$overwrite = true;
}

$conv_jpg = false;
if(isset($_POST['conv_jpg'])){
	$conv_jpg = true;
}
$conv_png = false;
if(isset($_POST['conv_png'])){
	$conv_png = true;
}

$total_size = array('original' => 0, 'original_unconverted' => 0, 'webp' => 0);
$file_count = array('done' => 0, 'omitted' => 0, 'error' => 0);

function filesize_formatted($size){
    $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
}

function directoryIteration($directory){
	global $total_size, $file_count, $overwrite, $conv_jpg, $conv_png;
	$images = glob($directory . "/*.{jpg,png}", GLOB_BRACE);
	foreach($images as $filepath){
		$webp_filepath = $directory.'/'.pathinfo($filepath, PATHINFO_FILENAME).'.webp';
		if(mime_content_type($filepath) == 'image/jpeg'){
			if($conv_jpg && (!file_exists($webp_filepath) || $overwrite)){
				$image = imagecreatefromjpeg($filepath);
				ob_start();
				imagejpeg($image,NULL,100);
				$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($image);
				$content =  imagecreatefromstring($cont);
				imagewebp($content, $webp_filepath);
				imagedestroy($content);
				echo '<li><span class="label done">DONE</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
				$file_count['done']++;
			}else{
				echo '<li><span class="label omitted">OMITTED</span> '.$filepath.' ('.filesize_formatted(filesize($filepath));
				if(file_exists($webp_filepath)){
					echo ' -> '.filesize_formatted(filesize($webp_filepath));
				}
				echo ')</li>';
				$file_count['omitted']++;
			}
			if(file_exists($webp_filepath)){
				$total_size['original'] += filesize($filepath);
				$total_size['webp'] += filesize($webp_filepath);
			}else{
				$total_size['original_unconverted'] += filesize($filepath);
			}
		}
		if(mime_content_type($filepath) == 'image/png'){
			if($conv_png && (!file_exists($webp_filepath) || $overwrite)){
				if(extension_loaded('imagick')){
					$content = imagecreatefromstring(file_get_contents($filepath));
					$im = new Imagick($filepath);
					$im->writeImage($webp_filepath);
					echo '<li><span class="label done">DONE</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
					$file_count['done']++;
				}else{
					echo '<li><span class="label omitted">ERROR</span> '.$filepath.' (Imagick not installed) </li>';
					$file_count['error']++;
				}
			}else{
				echo '<li><span class="label omitted">OMITTED</span> '.$filepath.' ('.filesize_formatted(filesize($filepath));
				if(file_exists($webp_filepath)){
					echo ' -> '.filesize_formatted(filesize($webp_filepath));
				}
				echo ')</li>';
				$file_count['omitted']++;
			}
			if(file_exists($webp_filepath)){
				$total_size['original'] += filesize($filepath);
				$total_size['webp'] += filesize($webp_filepath);
			}else{
				$total_size['original_unconverted'] += filesize($filepath);
			}
				
		}
		flush();ob_flush();
	}

	$dirs = glob($directory . '/*', GLOB_ONLYDIR);
	foreach($dirs as $dirpath) {
		echo '<li><span class="label opening">OPENING</span> '.$dirpath.'</li>';
		flush();ob_flush();
		directoryIteration($dirpath);
	}
}

if(extension_loaded('imagick')){
	$convert_png_checkbox = 'checked';
	$convert_png_info = '';
}else{
	$convert_png_checkbox = 'disabled';
	$convert_png_info = '<span class="warning_tooltip" title="To convert PNG files to WebP you need to install Imagick extension for PHP">⚠</span>';
}
?>

<header>
	<h1>WebP Converter</h1>
	Convert your JPG and PNG images to WebP – make your website much lighter.
	<form method="post">
		<div style="display:table-row;text-align:left;"><?=getcwd();?>/</div><div class="t"><input class="url_input" type="text" name="path" placeholder="Put relative address here" required />
		<div style="text-align:left;padding:5px 0;">Max execution time: <?=ini_get('max_execution_time');?>s <span class="warning_tooltip" title="After reaching execution time, script will stop working.
You can refresh the page and set script again – with default values it will omit proceeded files and continue.">⚠</span></div>
	<div style="text-align:left;padding:5px 0;">
	<label><input type="checkbox" name="conv_jpg" checked><checkbox></checkbox> Convert JPG files</label>
	<label><input type="checkbox" name="conv_png" <?=$convert_png_checkbox?>><checkbox></checkbox> Convert PNG files <?=$convert_png_info?></label>
	</div>
	<div style="text-align:left;padding:5px 0;">
	<label><input type="checkbox" name="overwrite"><checkbox></checkbox> Overwrite existing WebP <span class="warning_tooltip" title="As default, script will omit converting, when it find already converted file.
If you want to overwrite webp files, you can check this option.">⚠</span></label>
	</div>
		</div>
		<input class="url_submit" type="submit" value="Convert to WebP">
	</form>
</header>
<main>
<?php
if(isset($_POST['path'])):

// SET DIRECTORY RELATIVE PATH FOR CONVERSION
$startDirectory = $_POST['path'];

$startDirectory = str_replace('\\', '/', $startDirectory);
$startDirectory = trim($startDirectory, '/');
?>
<div class="in_progress" onclick="automatic_scroll()">WORK IN PROGRESS... PLEASE WAIT</div>
<ul>
	<li><span class="label opening">OPENING</span> <?=$startDirectory?></li>
	<?php 
	$time_start = microtime(true);
	directoryIteration($startDirectory);
	$time_end = microtime(true);
	$execution_time = $time_end - $time_start;
	if($total_size['original'] > 0){
		$size_difference = number_format((($total_size['original']-$total_size['webp'])*100)/$total_size['original'], 2);
	}else{
		$size_difference = 0;
	}
	?>
	<li><b>STATUS: DONE</b></li>
	<li>FILES <span class="label done">DONE</span>: <?=$file_count['done']?></li>
	<li>FILES <span class="label omitted">OMITTED</span>: <?=$file_count['omitted']?></li>
	<li>FILES <span class="label error">ERROR</span>: <?=$file_count['error']?></li>
	<li>ORIGINAL TOTAL SIZE: <?=filesize_formatted($total_size['original'])?> (+ <?=filesize_formatted($total_size['original_unconverted'])?> unconverted)</li>
	<li>WEBP TOTAL SIZE: <?=filesize_formatted($total_size['webp'])?></li>
	<li>SIZE DIFFERENCE: <?=filesize_formatted($total_size['original']-$total_size['webp'])?> (<?=$size_difference?>% of original)</li>
	<li>SCRIPT EXECUTION TIME: <?=number_format($execution_time, 3)?>s</li>
</ul>
<?php else: ?>
<section class="help">
<h2>Help</h2>
<p>Thank you for downloading this script.</p>
<p>Most of the weight of an average website are images. You can take an advantage of new technologies of optimization and reduce this load. It will help not only your web server to be more efficient, but also help users with weaker Internet connection and, by the way, help an environment.</p>
<p>This script will find all JPG and PNG files in appointed folder (and its subfolders) and create a copy in WebP format – saving with the same name (except extension, of course) and in the same folder. This can save up to 70% of the size of original image, without losing much quality.</p>
<p>As WebP format is not supported by all browsers, you should still keep original files and serve them to the users, who don't have such possibilities. You can use an automatic rule for htaccess, which will serve suitable file for the user, based on browser's HTTP headers:</p>
<pre><code># WEBP ACCEPT
RewriteCond %{HTTP_ACCEPT} image/webp
RewriteCond %{DOCUMENT_ROOT}/$1.webp -f
RewriteRule (.+)\.(jpe?g|png)$ $1.webp [T=image/webp,E=accept:1]
</code></pre>
</section>
<?php endif; ?>
</main>
<footer>2020 <a href="https://krylan.ovh/portfolio/en/">Krylan</a></footer>
</body>
</html>