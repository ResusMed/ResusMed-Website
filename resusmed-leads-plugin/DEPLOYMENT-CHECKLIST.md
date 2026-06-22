# Deployment Checklist

## Before Upload

- [ ] Code is in GitHub
- [ ] Version number updated in plugin header
- [ ] Internal version constant updated
- [ ] CHANGELOG.md updated
- [ ] ZIP file created from correct plugin folder
- [ ] ZIP tested on staging
- [ ] No API keys or passwords in files
- [ ] No student/customer export files included
- [ ] Rollback ZIP available

## Staging Test

- [ ] Plugin activates without fatal error
- [ ] Lead form works
- [ ] Lead appears in table
- [ ] Edit button works
- [ ] Notes save correctly
- [ ] Follow-up date/time edits correctly
- [ ] Interest Area edits correctly
- [ ] Email templates display correctly
- [ ] Manual template send works
- [ ] Cron/queue behavior works
- [ ] Delete lead does not crash site
- [ ] Mobile/admin layout acceptable

## Live Upload

- [ ] Backup site first
- [ ] Upload plugin ZIP
- [ ] Confirm plugin version shown in WordPress
- [ ] Test one lead
- [ ] Test one manual email if needed
- [ ] Confirm no critical error
- [ ] Document deployment date
