<?php

namespace App\Services\MediaLibrary;

use \Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator as BasePathGenerator;

class CustomPathGenerator implements BasePathGenerator
{
    /**
     * Get the path for the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPath(Media $media): string
    {
        $modelType = strtolower(class_basename($media->model_type));
        $collectionName = $media->collection_name ? strtolower($media->collection_name) . '/' : '';
        return $modelType . '/' . $media->model_id . '/' . $collectionName . $media->id . '/';
    }

    /**
     * Get the path for conversions of the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPathForConversions(Media $media): string
    {
        $modelType = strtolower(class_basename($media->model_type));
        $collectionName = $media->collection_name ? strtolower($media->collection_name) . '/' : '';
        return $modelType . '/' . $media->model_id . '/' . $collectionName . $media->id . '/conversions/';
    }

    /**
     * Get the path for responsive images of the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        $modelType = strtolower(class_basename($media->model_type));
        $collectionName = $media->collection_name ? strtolower($media->collection_name) . '/' : '';
        return $modelType . '/' . $media->model_id . '/' . $collectionName . $media->id . '/responsive/';
    }
}
