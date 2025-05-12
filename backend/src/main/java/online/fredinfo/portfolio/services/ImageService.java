package online.fredinfo.portfolio.services;

import online.fredinfo.portfolio.dto.ImageFormDTO;
import online.fredinfo.portfolio.dto.ImageDetailDTO;
import java.util.Set;

public interface ImageService {
    Set<ImageDetailDTO> findAll();
    ImageDetailDTO findById(Long id);
    Set<ImageDetailDTO> findByProjectId(Long projectId);
    ImageDetailDTO create(ImageFormDTO imageFormDTO);
    ImageDetailDTO update(Long id, ImageFormDTO imageFormDTO);
    void delete(Long id);
} 