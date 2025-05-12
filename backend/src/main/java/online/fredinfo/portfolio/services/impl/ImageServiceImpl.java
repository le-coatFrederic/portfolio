package online.fredinfo.portfolio.services.impl;

import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import online.fredinfo.portfolio.dto.ImageFormDTO;
import online.fredinfo.portfolio.dto.ImageDetailDTO;
import online.fredinfo.portfolio.models.Image;
import online.fredinfo.portfolio.models.Project;
import online.fredinfo.portfolio.repositories.ImageRepository;
import online.fredinfo.portfolio.repositories.ProjectRepository;
import online.fredinfo.portfolio.services.ImageService;
import online.fredinfo.portfolio.mappers.ImageMapper;
import java.util.Set;
import java.util.stream.Collectors;

@Service
@Transactional
public class ImageServiceImpl implements ImageService {
    
    private final ImageRepository imageRepository;
    private final ProjectRepository projectRepository;
    private final ImageMapper imageMapper;

    public ImageServiceImpl(ImageRepository imageRepository, ProjectRepository projectRepository, ImageMapper imageMapper) {
        this.imageRepository = imageRepository;
        this.projectRepository = projectRepository;
        this.imageMapper = imageMapper;
    }

    @Override
    public Set<ImageDetailDTO> findAll() {
        return imageRepository.findAll().stream()
            .map(imageMapper::toDTO)
            .collect(Collectors.toSet());
    }

    @Override
    public ImageDetailDTO findById(Long id) {
        return imageRepository.findById(id)
            .map(imageMapper::toDTO)
            .orElseThrow(() -> new RuntimeException("Image not found"));
    }

    @Override
    public Set<ImageDetailDTO> findByProjectId(Long projectId) {
        return imageRepository.findByProjectId(projectId).stream()
            .map(imageMapper::toDTO)
            .collect(Collectors.toSet());
    }

    @Override
    public ImageDetailDTO create(ImageFormDTO imageFormDTO) {
        Project project = projectRepository.findById(imageFormDTO.projectId())
            .orElseThrow(() -> new RuntimeException("Project not found"));
        Image image = imageMapper.toEntity(imageFormDTO);
        image.setProject(project);
        return imageMapper.toDTO(imageRepository.save(image));
    }

    @Override
    public ImageDetailDTO update(Long id, ImageFormDTO imageFormDTO) {
        Image image = imageRepository.findById(id)
            .orElseThrow(() -> new RuntimeException("Image not found"));
        Project project = projectRepository.findById(imageFormDTO.projectId())
            .orElseThrow(() -> new RuntimeException("Project not found"));
        imageMapper.updateEntityFromDTO(imageFormDTO, image);
        image.setProject(project);
        return imageMapper.toDTO(imageRepository.save(image));
    }

    @Override
    public void delete(Long id) {
        imageRepository.deleteById(id);
    }
} 