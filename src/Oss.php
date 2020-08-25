<?php


namespace uukule\storage\oss;


use uukule\StorageInterface;

class Oss implements StorageInterface
{
    public function __construct($config)
    {
    }

    /**
     * 是否存在指定的文件
     *
     * @param string $path
     * @return bool
     */
    function exists(string $path): bool
    {
        // TODO: Implement exists() method.
    }

    /**
     * 返回该文件的原始字符串内容
     *
     * @param string $path
     * @param bool $lock
     * @return string
     */
    function get(string $path, bool $lock = false): string
    {
        // TODO: Implement get() method.
        return $path;
    }

    /**
     * 获取文件元信息
     *
     * @param string $path 存储空间名称
     * @return array
     */
    function meta(string $path): array
    {
        // TODO: Implement meta() method.
    }

    /**
     * 文件上传/保存文件
     *
     * @param string $path
     * @param string|resource $contents
     * @param mixed $options
     * @return bool
     */
    function put(string $path, $contents, $options = []): bool
    {
        // TODO: Implement put() method.
    }

    /**
     * @param string $path
     * @param \think\File|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
     * @param mixed $options
     * @return string|false
     */
    function putFile(string $path, $file, $options = [])
    {
        // TODO: Implement putFile() method.
    }

    /**
     * 开头追加上传字符串
     *
     * @param string $path 存储空间名称
     * @param string $data 文件内容
     * @return bool
     */
    function prepend(string $path, string $data): bool
    {
        // TODO: Implement prepend() method.
    }

    /**
     * 结尾追加上传字符串
     *
     * @param string $path 存储空间名称
     * @param string $data 文件内容
     * @return bool
     */
    function append(string $path, string $data): bool
    {
        // TODO: Implement append() method.
    }

    /**
     * 删除文件
     *
     * @param string|array $paths
     * @return bool
     */
    function delete($paths): bool
    {
        // TODO: Implement delete() method.
    }

    /**
     * 复制文件
     *
     * @param string $from
     * @param string $to
     * @return bool
     */
    function copy(string $from, string $to): bool
    {
        // TODO: Implement copy() method.
    }

    /**
     * 移动文件
     *
     * @param string $from
     * @param string $to
     * @return bool
     */
    function move(string $from, string $to): bool
    {
        // TODO: Implement move() method.
    }

    /**
     * 获取文件的大小
     *
     * @param string $path
     * @return int
     */
    function size(string $path): int
    {
        // TODO: Implement size() method.
    }

    /**
     * 文件最后一次被修改的 UNIX 时间戳
     *
     * @param string $path
     * @return int
     */
    function lastModified(string $path): int
    {
        // TODO: Implement lastModified() method.
    }

    /**
     * 获取目录下的所有文件
     *
     * @param string|null $directory
     * @param bool $recursive
     * @return array
     */
    function files(string $directory = null, bool $recursive = false): array
    {
        // TODO: Implement files() method.
    }

    /**
     * 获取目录（包括子目录）下的所有文件
     *
     * @param string|null $directory
     * @param bool $recursive
     * @return array
     */
    function allFiles(string $directory = null, bool $recursive = false): array
    {
        // TODO: Implement allFiles() method.
    }

    /**
     * 获取目录下的所有目录
     *
     * @param string|null $directory
     * @param bool $recursive
     * @return array
     */
    function directories(string $directory = null, bool $recursive = false): array
    {
        // TODO: Implement directories() method.
    }

    /**
     * 获取目录（包括子目录）下的所有目录
     *
     * @param string|null $directory
     * @param bool $recursive
     * @return array
     */
    function allDirectories(string $directory = null, bool $recursive = false): array
    {
        // TODO: Implement allDirectories() method.
    }

    /**
     * 创建目录
     *
     * @param string $directory
     * @return bool
     */
    function makeDirectory(string $directory): bool
    {
        // TODO: Implement makeDirectory() method.
    }

    /**
     * 删除目录
     *
     * @param string $directory
     * @return bool
     */
    function deleteDirectory(string $directory): bool
    {
        // TODO: Implement deleteDirectory() method.
    }

    /**
     * 查询文件可见性
     *
     * @param string $path
     * @return string
     */
    function getVisibility(string $path): string
    {
        // TODO: Implement getVisibility() method.
    }

    /**
     * 设置文件可见性
     *
     * @param string $path
     * @param string $visibility
     * @return bool
     */
    function setVisibility(string $path, string $visibility): bool
    {
        // TODO: Implement setVisibility() method.
    }

    /**
     * 获取文件URL
     *
     * @param string $path
     * @return string
     */
    function url(string $path): string
    {
        // TODO: Implement url() method.
    }
}