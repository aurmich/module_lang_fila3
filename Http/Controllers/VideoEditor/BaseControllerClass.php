<?php

declare(strict_types=1);

namespace Modules\Media\Http\Controllers\VideoEditor;

use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * BaseControllerClass.
 *
 * @author Andchir <andycoderw@gmail.com>
 */
class BaseControllerClass {
    protected $config = [];
    protected $lang = [];

    /**
     * BaseControllerClass constructor.
     *
     * @param array $config
     * @param array $lang
     */
    public function __construct($config = [], $lang = []) {
        $this->config = array_merge([
            'authentication' => true,
            'ffmpeg_path' => 'ffmpeg',
            'ffprobe_path' => 'ffprobe',
            'base_url' => '/',
            'root_path' => '',
            'input_dir' => 'userfiles/input/',
            'output_dir' => 'userfiles/output/',
            'tmp_dir' => 'userfiles/tmp/',
            'log_filename' => 'log.txt',
            'database_dir' => 'database/',
            'ffmpeg_string_arr' => [],
            'users_restrictions' => [],
            'user_blocked_default' => false,
            'watermark_text' => '',
            'watermark_text_font_name' => 'libel-suit-rg.tt',
            'queue_size' => 10,
            'debug' => false,
        ], $config);

        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function escapeKeyName($keyName) {
        return preg_replace('/[^\w-]/', '-', $keyName);
    }

    /**
     * @param string $subDir
     *
     * @return Flintstone
     */
    public function dbGetStore($storeName, $subDir = '') {
        $storeDirPath = $this->config['root_path'].$this->config['database_dir'];
        if ($subDir) {
            $storeDirPath .= $subDir.'/';
        }
        if (! is_dir($storeDirPath)) {
            mkdir($storeDirPath);
        }
        $options = [
            'dir' => $storeDirPath,
            'formatter' => new JsonFormatter(),
        ];

        return new Flintstone($storeName, $options);
    }

    /**
     * @param bool $onlyOne
     *
     * @return array
     */
    public function dbGetBy($storeName, $key, $value, $onlyOne = false) {
        $output = [];
        $store = $this->dbGetStore($storeName);
        $keys = $store->getKeys();

        foreach ($keys as $k) {
            $data = $store->get($k);
            if (false === $data) {
                continue;
            }
<<<<<<< HEAD
            if (! empty($data[$key]) && $data[$key] === $value) {
=======
            if (! empty($data[$key]) && $data[$key] == $value) {
>>>>>>> 51fcb2a (up)
                $data['id'] = $k;
                if ($onlyOne) {
                    $output = $data;
                    break;
                }
                $output[] = $data;
            }
        }

        return $output;
    }

    public function dbInsert($storeName, $dataKey, $data) {
        $dataKey = $this->escapeKeyName($dataKey);
        $store = $this->dbGetStore($storeName);
        $store->set($dataKey, $data);
    }

    /**
<<<<<<< HEAD
     * Get request action name
=======
     * Get request action name.
>>>>>>> 51fcb2a (up)
     *
     * @param string $default
     *
     * @return string
     */
    public static function getRequestAction($default = '') {
        return ! empty($_GET['action'])
            ? trim($_GET['action'])
            : (! empty($_POST['action']) ? trim($_POST['action']) : $default);
    }

    /**
<<<<<<< HEAD
     * Handle request
=======
     * Handle request.
>>>>>>> 51fcb2a (up)
     *
     * @return array
     */
    public function handleRequest() {
        $action = self::getRequestAction();
        $output = [];
        $forcePrintOutput = true;

        switch ($action) {
            case 'auth':
                $forcePrintOutput = false;
                $authController = new AuthControllerClass($this->config, $this->lang);
                $authController->auth();

                break;
            case 'logout':
                $this->cleanTempUserDir();

                self::logout();

                break;
            case 'upload':
                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->importMedia();

                break;
            case 'content_list':
                $type = ! empty($_GET['type']) ? trim($_GET['type']) : '';
                $controller = new ContentControllerClass($this->config, $this->lang);

                $output = $controller->getMediaList($type);

                break;
            case 'delete':
                $itemId = ! empty($_POST['itemId']) ? trim($_POST['itemId']) : 0;
                $type = ! empty($_POST['type']) ? trim($_POST['type']) : '';

                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->deleteItem($itemId, $type);

                break;
            case 'select_media':
                $itemId = ! empty($_GET['itemId']) ? trim($_GET['itemId']) : 0;
                $type = ! empty($_GET['type']) ? trim($_GET['type']) : '';

                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->getItemData($itemId, $type);

                break;
            case 'update_media':
                $itemId = ! empty($_POST['itemId']) ? trim($_POST['itemId']) : 0;
                $type = ! empty($_POST['type']) ? trim($_POST['type']) : '';
                $value = ! empty($_POST['value']) ? trim($_POST['value']) : '';

                if (! $value) {
                    return [
                        'success' => false,
                        'msg' => $this->lang['value_is_empty'],
                    ];
                }

                $controller = new ContentControllerClass($this->config, $this->lang);
                $title = strip_tags($value);
                $output = $controller->updateItemData($itemId, $type, ['title' => $title]);

                break;
            case 'frame_image':
                $itemId = ! empty($_GET['itemId']) ? trim($_GET['itemId']) : 0;
                $type = ! empty($_GET['type']) ? trim($_GET['type']) : 'input';
<<<<<<< HEAD
                $time = ! empty($_GET['time']) ? (int) ($_GET['time']) : 0;
=======
                $time = ! empty($_GET['time']) ? intval($_GET['time']) : 0;
>>>>>>> 51fcb2a (up)

                $controller = new ContentControllerClass($this->config, $this->lang);
                $controller->printFrame($itemId, $type, $time);

                break;
            case 'render':
                $outputTitle = ! empty($_POST['title']) ? trim($_POST['title']) : '';
<<<<<<< HEAD
                $options = ! empty($_POST['options']) && \is_array($_POST['options']) ? $_POST['options'] : [];
=======
                $options = ! empty($_POST['options']) && is_array($_POST['options']) ? $_POST['options'] : [];
>>>>>>> 51fcb2a (up)
                $data = ! empty($_POST['data']) ? $_POST['data'] : [];

                $controller = new RenderControllerClass($this->config, $this->lang);
                $output = $controller->render($outputTitle, $options, $data);

                break;
            case 'convert':
                $itemId = ! empty($_POST['itemId']) ? trim($_POST['itemId']) : 0;
                $type = ! empty($_POST['type']) ? trim($_POST['type']) : 'input';
<<<<<<< HEAD
                $options = ! empty($_POST['options']) && \is_array($_POST['options']) ? $_POST['options'] : [];
=======
                $options = ! empty($_POST['options']) && is_array($_POST['options']) ? $_POST['options'] : [];
>>>>>>> 51fcb2a (up)

                $controller = new RenderControllerClass($this->config, $this->lang);
                $output = $controller->convert($itemId, $type, $options);

                break;
            case 'cut_fast':
                $user = $this->getUser();
                if (false === $user) {
                    $output = [
                        'success' => false,
                        'msg' => 'Forbidden.',
                    ];
                } else {
                    $itemId = ! empty($_POST['itemId']) ? trim($_POST['itemId']) : 0;
<<<<<<< HEAD
                    $timeFrom = ! empty($_POST['from']) ? (int) ($_POST['from']) : 0;
                    $timeTo = ! empty($_POST['to']) ? (int) ($_POST['to']) : 0;
=======
                    $timeFrom = ! empty($_POST['from']) ? intval($_POST['from']) : 0;
                    $timeTo = ! empty($_POST['to']) ? intval($_POST['to']) : 0;
>>>>>>> 51fcb2a (up)
                    $controller = new RenderControllerClass($this->config, $this->lang);
                    $output = $controller->cutFast($itemId, $timeFrom, $timeTo);
                }

                break;
            case 'download':
                $forcePrintOutput = false;
                $itemId = ! empty($_GET['itemId']) ? trim($_GET['itemId']) : 0;
                $type = ! empty($_GET['type']) ? trim($_GET['type']) : 'input';

                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->downloadMediaFile($itemId, $type);

                break;
            case 'queue_status':
                $controller = new QueueControllerClass($this->config, $this->lang);
                list($pendingCount, $processingCount, $percent, $userStatus) = $controller->getUserQueueStatus();
                $output = [
                    'success' => true,
                    'status' => $userStatus,
                    'pendingCount' => $pendingCount,
                    'processingCount' => $processingCount,
                    'percent' => $percent,
                ];

                break;
            case 'processing_stop':
                $controller = new QueueControllerClass($this->config, $this->lang);
                $output = $controller->stopUserProcess();

                break;
            case 'user_log':
                $output = $this->userLog();

                break;
            case 'user_profile':
                $user = $this->getUser(true);
                if (false !== $user) {
                    $output['success'] = true;
                    $output['data'] = $user;
                    $output['data']['files_size_max_formatted'] = self::sizeFormat($user['files_size_max']);
                    $output['data']['files_size_total_formatted'] = self::sizeFormat($user['files_size_total']);
                    $output['data']['files_size_percent'] = floor($user['files_size_total'] / $user['files_size_max'] * 100);
                }

                break;
            case 'users':
                $forcePrintOutput = false;
                $controller = new UsersControllerClass($this->config, $this->lang);
                $output = $controller->getUsers();

                break;
            case 'delete_user':
                $forcePrintOutput = false;
                $controller = new UsersControllerClass($this->config, $this->lang);
                $output = $controller->deleteUserPage();

                break;
            case 'edit_user':
                $forcePrintOutput = false;
                $controller = new UsersControllerClass($this->config, $this->lang);
                $output = $controller->editUserPage();

                break;
            case 'content_status_toggle':
                $itemId = ! empty($_GET['itemId']) ? trim($_GET['itemId']) : 0;
                $type = ! empty($_GET['type']) ? trim($_GET['type']) : '';
                $userId = ! empty($_GET['userId']) ? trim($_GET['userId']) : 0;
                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->toggleItemStatusAdmin($itemId, $type, $userId);
                if (true === $output) {
                    self::redirectTo($this->config['base_url'].$this->config['home_url'].'?action=edit_user&user_id='.$userId);
                }

                break;
            case 'signup':
                $forcePrintOutput = false;
                if (! empty($_POST['email'])
                    && ! empty($_POST['password'])
                    && ! empty($_POST['password_confirm'])) {
                    $authController = new AuthControllerClass($this->config, $this->lang);
                    if ($authController->register()) {
                        self::redirectTo($this->config['base_url'].$this->config['home_url']);
                    }
                }

                break;
            case 'password_reset':
                $forcePrintOutput = false;
                if (! empty($_POST['email'])) {
                    $authController = new AuthControllerClass($this->config, $this->lang);
                    if ($authController->resetPassword(trim($_POST['email']))) {
                        self::redirectTo($this->config['base_url'].$this->config['home_url']);
                    }
                }

                break;
            case 'password_confirm':
                $forcePrintOutput = false;
                if (! empty($_GET['code'])) {
                    $authController = new AuthControllerClass($this->config, $this->lang);
                    if ($authController->confirmResetPassword(trim($_GET['code']))) {
                        self::redirectTo($this->config['base_url'].$this->config['home_url']);
                    }
                }

                break;
            case 'lang_script':
                header('Content-Type: application/javascript');
                echo 'var LANG = '.json_encode($this->lang).';';
                exit;

                break;
            case 'images_pixabay':
                $forcePrintOutput = false;

                break;
            case 'audio_library':
<<<<<<< HEAD
                $requestData = isset($_GET['query']) && \is_array($_GET['query']) ? $_GET['query'] : [];
=======
                $requestData = isset($_GET['query']) && is_array($_GET['query']) ? $_GET['query'] : [];
>>>>>>> 51fcb2a (up)
                $controller = new ContentControllerClass($this->config, $this->lang);
                $output = $controller->getLibraryContentList('audio_library', $requestData);

                break;
        }

        if ($forcePrintOutput && ! empty($action)) {
            echo json_encode($output);
            exit;
        }

        return $output;
    }

    /**
<<<<<<< HEAD
     * Get user
=======
     * Get user.
>>>>>>> 51fcb2a (up)
     *
     * @param bool $detailed
     * @param int  $userId
     * @param bool $filter_blocked
     *
     * @return array|bool|mixed
     */
    public function getUser($detailed = false, $userId = 0, $filter_blocked = true) {
        $output = false;
        if ($this->config['authentication']) {
            $checkBlocking = empty($userId) && $filter_blocked;
            if (! $userId) {
<<<<<<< HEAD
                $userSession = self::sessionGet('user');
=======
                $userSession = BaseControllerClass::sessionGet('user');
>>>>>>> 51fcb2a (up)
                if (false === $userSession || empty($userSession['id'])) {
                    return false;
                }
                $userId = $userSession['id'];
            }
            $userStore = $this->dbGetStore('users');
            $user = $userStore->get($userId);
            if ($checkBlocking && ! empty($user['blocked'])) {
<<<<<<< HEAD
                self::sessionDelete('user');
=======
                BaseControllerClass::sessionDelete('user');
>>>>>>> 51fcb2a (up)
            }
            if (! isset($user['confirmed'])) {
                $user['confirmed'] = true;
            }
            if (! isset($user['type'])) {
                $user['type'] = 'basic';
            }
        } else {
            // Default user data
            $user = [
                'id' => '1',
                'name' => 'Admin',
                'email' => '',
                'role' => 'admin',
                'type' => 'advanced',
                'confirmed' => true,
                'blocked' => false,
            ];
            $userId = 1;
        }
        if (! empty($user) && (($filter_blocked && empty($user['blocked'])) || ! $filter_blocked)) {
            $user['id'] = $userId;
            if ($detailed) {
                if (! empty($this->config['users_restrictions'][$user['role']])
                    && ! empty($this->config['users_restrictions'][$user['role']]['files_size_max'])
                ) {
                    $user['files_size_total'] = $this->getUserFilesSizeTotal($user['id']);
                    $user['files_size_max'] = $this->config['users_restrictions'][$user['role']]['files_size_max'];
                } else {
                    $user['files_size_max'] = disk_total_space($this->config['root_path']);
                    $user['files_size_total'] = $user['files_size_max'] - disk_free_space($this->config['root_path']);
                }
            }
            $output = $user;
        }

        return $output;
    }

    /**
<<<<<<< HEAD
     * Get user log content
=======
     * Get user log content.
>>>>>>> 51fcb2a (up)
     *
     * @return array
     */
    public function userLog() {
        $user = $this->getUser();
        if (false === $user) {
            return [
                'success' => false,
                'msg' => 'Forbidden.',
            ];
        }
        $allowed = ! empty($this->config['users_restrictions'][$user['role']])
        && isset($this->config['users_restrictions'][$user['role']]['show_log'])
            ? $this->config['users_restrictions'][$user['role']]['show_log']
            : true;
        if (! $allowed) {
            return [
                'success' => false,
                'msg' => 'Forbidden.',
            ];
        }
        $tmpPath = $this->getPublicPath('tmp_dir', $user['id']);
<<<<<<< HEAD
        $logPath = $tmpPath.\DIRECTORY_SEPARATOR.'log.txt';
=======
        $logPath = $tmpPath.DIRECTORY_SEPARATOR.'log.txt';
>>>>>>> 51fcb2a (up)
        $content = '';
        if (file_exists($logPath)) {
            $content = trim(file_get_contents($logPath));
            $content = str_replace($this->config['public_path'], '***/', $content);
        }

        return [
            'success' => true,
            'content' => $content,
        ];
    }

    /**
     * @return array
     */
    public function getVideoProperties($filePath) {
        $ext = self::getExtension($filePath);
        $user = $this->getUser();

        $output = [];
<<<<<<< HEAD
        if (\in_array($ext, $this->config['upload_images'], true)) {
            $output['type'] = 'image';
            $imageSize = getimagesize($filePath);
            $output['width'] = (int) ($imageSize[0]);
            $output['height'] = (int) ($imageSize[1]);
=======
        if (in_array($ext, $this->config['upload_images'])) {
            $output['type'] = 'image';
            $imageSize = getimagesize($filePath);
            $output['width'] = intval($imageSize[0]);
            $output['height'] = intval($imageSize[1]);
>>>>>>> 51fcb2a (up)
        } else {
            $output['type'] = 'video';
            if (\in_array($ext, $this->config['upload_audio'], true)) {
                $output['type'] = 'audio';
            }
            $content = shell_exec($this->config['ffprobe_path'].' -i "'.$filePath.'" 2>&1');

            $this->logging($content, $user['id']);

            $regex_size = '/Video: (?:.*), ([0-9]{1,4})x([0-9]{1,4})/';
            if (preg_match($regex_size, $content, $matches)) {
                $output['width'] = $matches[1] ? (int) ($matches[1]) : null;
                $output['height'] = $matches[2] ? (int) ($matches[2]) : null;
            }

            $regex_duration = '/Duration: ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}).([0-9]{1,2})/';
            if (preg_match($regex_duration, $content, $matches)) {
                $hours = $matches[1] ? (int) ($matches[1]) : 0;
                $mins = $matches[2] ? (int) ($matches[2]) : 0;
                $secs = $matches[3] ? (int) ($matches[3]) : 0;
                $ms = $matches[4] ? (int) ($matches[4]) : 0;
                $output['duration_ms'] = ($hours * 60 * 60) * 1000;
                $output['duration_ms'] += ($mins * 60) * 1000;
                $output['duration_ms'] += $secs * 1000;
                $output['duration_ms'] += $ms;
            }

            $output['streams'] = 2;
            if (preg_match_all("/Stream #([^\s]+)/", $content, $matches)) {
                $output['streams'] = \count($matches[0]);
            }
        }

        return $output;
    }

    /**
<<<<<<< HEAD
     * Get media file path
=======
     * Get media file path.
>>>>>>> 51fcb2a (up)
     *
     * @return string
     */
    public function getMediaFilePath($type, $userId, $mediaData) {
<<<<<<< HEAD
        $inputDirPath = $this->getPublicPath($type.'_dir', $userId).\DIRECTORY_SEPARATOR;
=======
        $inputDirPath = $this->getPublicPath($type.'_dir', $userId).DIRECTORY_SEPARATOR;
>>>>>>> 51fcb2a (up)

        return $inputDirPath.$mediaData['id'].'.'.$mediaData['ext'];
    }

    /**
<<<<<<< HEAD
     * Get file extension
=======
     * Get file extension.
>>>>>>> 51fcb2a (up)
     *
     * @return string
     */
    public static function getExtension($filePath) {
<<<<<<< HEAD
        $temp_arr1 = $filePath ? explode(\DIRECTORY_SEPARATOR, $filePath) : [];
        $temp_arr = \count($temp_arr1) ? explode('.', end($temp_arr1)) : [];
        $ext = \count($temp_arr) > 1 ? end($temp_arr) : '';
=======
        $temp_arr1 = $filePath ? explode(DIRECTORY_SEPARATOR, $filePath) : [];
        $temp_arr = count($temp_arr1) ? explode('.', end($temp_arr1)) : [];
        $ext = count($temp_arr) > 1 ? end($temp_arr) : '';
>>>>>>> 51fcb2a (up)
        if (false !== strpos($ext, '?')) {
            $ext = substr($ext, 0, strpos($ext, '?'));
        }

        return strtolower($ext);
    }

    /**
     * @param string $unit
     * @param int    $decimals
     *
     * @return string
     */
    public static function sizeFormat($bytes, $unit = '', $decimals = 2) {
        $units = [
            'B' => 0,
            'KB' => 1,
            'MB' => 2,
            'GB' => 3,
            'TB' => 4,
            'PB' => 5,
            'EB' => 6,
            'ZB' => 7,
            'YB' => 8,
        ];
        $value = 0;
        if ($bytes > 0) {
<<<<<<< HEAD
            if (! \array_key_exists($unit, $units)) {
=======
            if (! array_key_exists($unit, $units)) {
>>>>>>> 51fcb2a (up)
                $pow = floor(log($bytes) / log(1024));
                $unit = array_search($pow, $units, true);
            }
            $value = ($bytes / 1024 ** floor($units[$unit]));
        }
        if (! is_numeric($decimals) || $decimals < 0) {
            $decimals = 2;
        }

        return sprintf('%.'.$decimals.'f '.$unit, $value);
    }

    /**
<<<<<<< HEAD
     * getYoutubeId
=======
     * getYoutubeId.
>>>>>>> 51fcb2a (up)
     *
     * @par string $video_url
     *
     * @param mixed $url
     */
    public function getYoutubeId($url) {
        // http://stackoverflow.com/a/10315969/2252921
        preg_match('/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/',
            $url, $founded);

        return ! empty($founded) ? $founded[1] : '';
    }

    /**
<<<<<<< HEAD
     * Get Vimeo video ID
=======
     * Get Vimeo video ID.
>>>>>>> 51fcb2a (up)
     *
     * @return string
     */
    public function getVimeoId($url) {
        $regexp = '~(https?://)?(www.)?(player.)?vimeo.com/([a-z]*/)*([0-9]{6,11})[?]?.*~';
        preg_match($regexp, $url, $founded);

        return ! empty($founded) ? end($founded) : '';
    }

    /**
     * @return array|bool
     */
    public function getUrlFromYouTube($videoUrl) {
<<<<<<< HEAD
        if (\strlen($videoUrl) > 11) {
=======
        if (strlen($videoUrl) > 11) {
>>>>>>> 51fcb2a (up)
            $videoId = $this->getYoutubeId($videoUrl);
        } else {
            $videoId = $videoUrl;
        }
        $output = [];

        if (! $videoId) {
            return false;
        }

        $videoInfo = file_get_contents('http://youtube.com/get_video_info?video_id='.$videoId.'&ps=default&eurl=&gl=US&hl=en');

        if (false === $videoInfo) {
            return false;
        }

        parse_str($videoInfo, $video_info_arr);

        // error
        if (! isset($video_info_arr['url_encoded_fmt_stream_map'])) {
            if (! empty($video_info_arr['reason'])) {
                $output['msg'] = $video_info_arr['reason'];
            }
            $output['success'] = false;

            return $output;
        }

        $data = [];
        $formats_arr = explode(',', $video_info_arr['url_encoded_fmt_stream_map']);

        $videoTitle = ! empty($video_info_arr['title']) ? $video_info_arr['title'] : '';

        foreach ($formats_arr as $vid) {
            parse_str($vid, $vid_data);
            if (! isset($vid_data['url'])) {
                continue;
            }

            preg_match("/([a-z]+)\/([a-z0-9]+); codecs=\"(.+)\"/", $vid_data['type'], $matches);

            if (! isset($data[$matches[2]])) {
                $data[$matches[2]] = [];
            }

            $data[$matches[2]][$vid_data['quality']] = [
                'type' => $matches[1],
                'format' => $matches[2],
                'codecs' => $matches[3],
                'url' => $vid_data['url'],
                'quality' => $vid_data['quality'],
                'title' => $videoTitle,
            ];
        }

        if (! empty($data['mp4'])) {
            $output['success'] = true;
            $output['data'] = isset($data['mp4']['hd720'])
                ? $data['mp4']['hd720']
                : $data['mp4']['medium'];

            return $output;
        }

        return [
            'success' => false,
            'msg' => 'Video not found.',
        ];
    }

    /**
     * @return array|bool
     */
    public static function sessionGet($name) {
        return ! empty($_SESSION[$name])
            ? $_SESSION[$name]
            : false;
    }

    public static function sessionSet($name, $data) {
        $_SESSION[$name] = $data;
    }

    public static function sessionDelete($name) {
        $_SESSION[$name] = null;
        unset($_SESSION[$name]);
    }

    public static function setFlash($key, $value) {
        $current = self::sessionGet($key);
<<<<<<< HEAD
        if (! \is_array($current)) {
=======
        if (! is_array($current)) {
>>>>>>> 51fcb2a (up)
            $current = [];
        }
        $current[] = $value;
        self::sessionSet($key, $current);
    }

    /**
     * @return array|bool
     */
    public static function getFlash($key) {
        $output = self::sessionGet($key);
        self::sessionDelete($key);

        return $output;
    }

    /**
     * @param bool $permanent
     */
    public static function redirectTo($redirectUrl, $permanent = false) {
        header('Location: '.$redirectUrl, true, $permanent ? 301 : 302);
        exit;
    }

    /**
     * Log out.
     */
    public static function logout() {
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
        self::redirectTo(str_replace('?action=logout', '', $_SERVER['REQUEST_URI']));
    }

    /**
<<<<<<< HEAD
     * Download file
=======
     * Download file.
>>>>>>> 51fcb2a (up)
     */
    public function downloadFile($filePath, $fileName = '') {
        $pathInfo = pathinfo($filePath);
        $fileSize = filesize($filePath);
        if (! $fileName) {
            $fileName = $pathInfo['basename'];
        }

        if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
            header('Content-Type: application/force-download');
        } else {
            header('Content-Type: application/octet-stream');
        }

        header('Accept-Ranges: bytes');
        header('Content-Length: '.$fileSize);
        header('Content-disposition: attachment; filename="'.$fileName.'"');

        ob_clean();
        flush();
        readfile($filePath);

        exit;
    }

    /**
     * @return string
     */
    public function getPublicPath($pathKey, $userId = 0) {
        $output = $this->config['public_path'];
        $output .= isset($this->config[$pathKey]) ? $this->config[$pathKey] : '';
        if ($userId) {
            $output .= $userId;
        } else {
            $output = substr($output, 0, -1);
        }
        if (! is_dir($output)) {
            mkdir($output);
        }

        return $output;
    }

    /**
     * Get current site base URL.
     */
    public static function getCurrentBaseUrl() {
        $requestScheme = ! empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $domainName = $_SERVER['HTTP_HOST'];
        $baseUrl = ! empty($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
        $serverPort = $_SERVER['SERVER_PORT'];
<<<<<<< HEAD
        $isSecureRequest = '443' === $serverPort;
=======
        $isSecureRequest = '443' == $serverPort;
>>>>>>> 51fcb2a (up)
        preg_match_all('/([^\/]+\/)/', $baseUrl, $matches);
        $output = $requestScheme.'://'.$domainName.'/';
        if (! empty($matches)) {
            $output .= implode('', $matches[1]);
        }

        return $output;
    }

    /**
     * @return mixed
     */
    public function beautifyQuotes($str) {
        $str = preg_replace_callback(
            '#(([\"]{2,})|(?![^\W])(\"))|([^\s][\"]+(?![\w]))#u',
            function ($matches) {
<<<<<<< HEAD
                if (3 === \count($matches)) {
=======
                if (3 === count($matches)) {
>>>>>>> 51fcb2a (up)
                    return '«»';
                } else {
                    if ($matches[1]) {
                        return str_replace('"', '«', $matches[1]);
                    } else {
                        return str_replace('"', '»', $matches[4]);
                    }
                }
            },
            $str
        );
        $str = strip_tags($str);

        return $str;
    }

    /**
<<<<<<< HEAD
     * Log data ti file
=======
     * Log data ti file.
>>>>>>> 51fcb2a (up)
     *
     * @return bool
     */
    public function logging($str, $userId = 0) {
        if ($userId) {
            $logFilePath = $this->getPublicPath('tmp_dir',
<<<<<<< HEAD
                $userId).\DIRECTORY_SEPARATOR.$this->config['log_filename'];
        } else {
            $logFilePath = $this->getPublicPath('tmp_dir').\DIRECTORY_SEPARATOR.$this->config['log_filename'];
=======
                $userId).DIRECTORY_SEPARATOR.$this->config['log_filename'];
        } else {
            $logFilePath = $this->getPublicPath('tmp_dir').DIRECTORY_SEPARATOR.$this->config['log_filename'];
>>>>>>> 51fcb2a (up)
        }
        if (\is_array($str)) {
            $str = print_r($str, true);
        }

<<<<<<< HEAD
        if (! is_dir(\dirname($logFilePath))) {
            mkdir(\dirname($logFilePath));
=======
        if (! is_dir(dirname($logFilePath))) {
            mkdir(dirname($logFilePath));
>>>>>>> 51fcb2a (up)
        }

        if (file_exists($logFilePath) && filesize($logFilePath) >= $this->config['max_log_size']) {
            @unlink($logFilePath);
        }

        $fp = fopen($logFilePath, 'a');

        $str = PHP_EOL.PHP_EOL.date('d/m/Y H:i:s').PHP_EOL.$str;

        fwrite($fp, $str);
        fclose($fp);

        return true;
    }

    /**
     * @return bool
     */
    public function is_running($pid) {
        exec("ps $pid", $ProcessState);

<<<<<<< HEAD
        return \count($ProcessState) >= 2;
=======
        return count($ProcessState) >= 2;
>>>>>>> 51fcb2a (up)
    }

    /**
     * @return bool
     */
    public function kill($pid) {
        if ($this->is_running($pid)) {
            exec("kill -KILL $pid");

            return true;
        } else {
            return false;
        }
    }

    /**
<<<<<<< HEAD
     * Execute cmd in the background
=======
     * Execute cmd in the background.
>>>>>>> 51fcb2a (up)
     *
     * @return string
     */
    public function execInBackground($cmd) {
        $pid = '';
<<<<<<< HEAD
        if ('Windows' === substr(php_uname(), 0, 7)) {
=======
        if ('Windows' == substr(php_uname(), 0, 7)) {
>>>>>>> 51fcb2a (up)
            pclose(popen('start /B '.$cmd, 'r'));
        } else {
            $pid = shell_exec("nohup $cmd > /dev/null & echo $!");
        }

        return trim($pid);
    }

    /**
<<<<<<< HEAD
     * Time to seconds
=======
     * Time to seconds.
>>>>>>> 51fcb2a (up)
     *
     * @return float|int
     */
    public static function timeToSeconds($time) {
        $output = 0;
        $time_arr = explode(':', $time);
        $t = [3600, 60, 1];
        foreach ($time_arr as $k => $tt) {
            $output += ((float) $tt * $t[$k]);
        }

        return $output;
    }

    /**
<<<<<<< HEAD
     * Seconds to time
=======
     * Seconds to time.
>>>>>>> 51fcb2a (up)
     *
     * @return string
     */
    public static function secondsToTime($sec) {
<<<<<<< HEAD
        if (! \is_float($sec)) {
            $sec = (float) $sec;
=======
        if (! is_float($sec)) {
            $sec = floatval($sec);
>>>>>>> 51fcb2a (up)
        }

        $hours = floor($sec / 3600);
        $minutes = floor(($sec - ($hours * 3600)) / 60);
        $seconds = $sec - ($hours * 3600) - ($minutes * 60);

        if ($hours < 10) {
            $hours = '0'.$hours;
        }
        if ($minutes < 10) {
            $minutes = '0'.$minutes;
        }
        if ($seconds < 10) {
            $seconds = '0'.$seconds;
        }

        $seconds = number_format($seconds, 2, '.', '');

        return $hours.':'.$minutes.':'.$seconds;
    }

    /**
<<<<<<< HEAD
     * Get user files size total
=======
     * Get user files size total.
>>>>>>> 51fcb2a (up)
     *
     * @param int $userId
     *
     * @return int
     */
    public function getUserFilesSizeTotal($userId = 0) {
        if (! $userId) {
            $user = $this->getUser();
            if (false !== $user) {
                $userId = $user['id'];
            } else {
                return 0;
            }
        }

        $sizeTotal = 0;

        $inputDirPath = $this->getPublicPath('input_dir', $userId);
        $outputDirPath = $this->getPublicPath('output_dir', $userId);
        $tmpDirPath = $this->getPublicPath('tmp_dir', $userId);

        $sizeTotal += self::getDirectorySize($inputDirPath);
        $sizeTotal += self::getDirectorySize($outputDirPath);
        $sizeTotal += self::getDirectorySize($tmpDirPath);

        return $sizeTotal;
    }

    /**
     * @param int $userId
     *
     * @return bool
     */
    public function cleanTempUserDir($userId = 0) {
        if (! $userId) {
            $user = $this->getUser();
            if (false !== $user) {
                $userId = $user['id'];
            } else {
                return false;
            }
        }
        $output = false;
        $tmpDirPath = $this->getPublicPath('tmp_dir', $userId);
        if (is_dir($tmpDirPath)) {
            self::cleanDir($tmpDirPath, ['log.txt']);
            $output = true;
        }

        return $output;
    }

    /**
     * @param array $filenameWhitelist
     */
    public static function cleanDir($dirPath, $filenameWhitelist = []) {
        foreach (new \DirectoryIterator($dirPath) as $fileInfo) {
            if (! $fileInfo->isDot() && ! $fileInfo->isDir()
<<<<<<< HEAD
                && ! \in_array($fileInfo->getFilename(), $filenameWhitelist, true)
=======
                && ! in_array($fileInfo->getFilename(), $filenameWhitelist)
>>>>>>> 51fcb2a (up)
            ) {
                unlink($fileInfo->getPathname());
            }
        }
    }

    public static function deleteDir($dirPath) {
        if (is_dir($dirPath)) {
            self::cleanDir($dirPath);
            @rmdir($dirPath);
        }
    }

    /**
     * @return int
     */
    public static function getDirectorySize($dirPath) {
        $output = 0;
        if (! is_dir($dirPath)) {
            return $output;
        }
        foreach (new \DirectoryIterator($dirPath) as $fileInfo) {
            if (! $fileInfo->isDot() && ! $fileInfo->isDir()) {
                $output += filesize($fileInfo->getPathname());
            }
        }

        return $output;
    }

    /**
<<<<<<< HEAD
     * Get template string
=======
     * Get template string.
>>>>>>> 51fcb2a (up)
     *
     * @param array $input
     *
     * @return string
     */
    public function getTemplate($templateName, $input = []) {
        $templatePath = $this->config['root_path'].'templates/'.$templateName.'.html.php';
        if (! file_exists($templatePath)) {
            return '';
        }

        $config = $this->config;
        $lang = $this->lang;
        $currentUser = $this->getUser();

        ob_start();
        include $templatePath;
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }

    /**
<<<<<<< HEAD
     * Send email
=======
     * Send email.
>>>>>>> 51fcb2a (up)
     *
     * @return bool
     */
    public function sendEmail($emailAddress, $emailSubject, $emailBody) {
        $mail = new PHPMailer(true);
        try {
            if ($this->config['debug']) {
                $mail->SMTPDebug = 2;
            }
            $mail->isSMTP();
            $mail->Host = $this->config['email_smtp']['host'];
            $mail->SMTPAuth = $this->config['email_smtp']['auth'];
            $mail->Username = $this->config['email_smtp']['username'];
            $mail->Password = $this->config['email_smtp']['password'];
            $mail->SMTPSecure = $this->config['email_smtp']['secure'];
            $mail->Port = $this->config['email_smtp']['port'];

            $mail->setFrom($this->config['email_smtp']['email_from']);
            $mail->addAddress($emailAddress);

            $mail->isHTML(true);
            $mail->Subject = $emailSubject;
            $mail->Body = $emailBody;
            $mail->AltBody = strip_tags($emailBody);

            $mail->send();
        } catch (Exception $e) {
            if ($this->config['debug']) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                exit;
            }

            return false;
        }

        return true;
    }
}
