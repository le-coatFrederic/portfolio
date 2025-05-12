package online.fredinfo.portfolio.mappers;

import org.springframework.stereotype.Component;
import online.fredinfo.portfolio.models.Image;
import online.fredinfo.portfolio.dto.ImageFormDTO;
import online.fredinfo.portfolio.dto.ImageDetailDTO;

@Component
public class ImageMapper {
    
    public Image toEntity(ImageFormDTO dto) {
        Image image = new Image();
        image.setName(dto.name());
        image.setUrl(dto.url());
        return image;
    }

    public ImageDetailDTO toDTO(Image entity) {
        return new ImageDetailDTO(
            entity.getId(),
            entity.getName(),
            entity.getUrl(),
            entity.getProject().getId()
        );
    }

    public Image fromDTO(ImageDetailDTO dto) {
        Image image = new Image();
        image.setId(dto.id());
        image.setName(dto.name());
        image.setUrl(dto.url());
        return image;
    }

    public void updateEntityFromDTO(ImageFormDTO dto, Image entity) {
        if (dto.name() != null) entity.setName(dto.name());
        if (dto.url() != null) entity.setUrl(dto.url());
    }
} 